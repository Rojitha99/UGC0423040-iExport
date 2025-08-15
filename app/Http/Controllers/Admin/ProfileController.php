<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB; // Added missing import
use App\Models\UserProfile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('frontend.Customer.sellerprofile', compact('user'));
    }

    /**
     * Store a newly created user profile in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user = Auth::user();
        
        try {
            DB::beginTransaction();
            
            $profileData = [
                'user_id' => $user->id,
                'phone' => $validated['phone'],
                'date_of_birth' => $validated['date_of_birth'],
                'address' => $validated['address']
            ];
            
            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('avatars', 'public');
                $profileData['avatar_path'] = $path;
            }
            
            UserProfile::create($profileData);
            
            DB::commit();
            
            return redirect()->back()->with('success', 'Profile created successfully!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Profile creation failed: '.$e->getMessage());
            return redirect()->back()->with('error', 'Failed to create profile');
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user = Auth::user();
        
        try {
            DB::beginTransaction();
            
            $user->name = $validated['name'];
            $user->save();
            
            $profileData = [
                'phone' => $validated['phone'],
                'date_of_birth' => $validated['date_of_birth'],
                'address' => $validated['address']
            ];
            
            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('avatars', 'public');
                $profileData['avatar_path'] = $path;
                
                if ($user->profile && $user->profile->avatar_path) {
                    Storage::disk('public')->delete($user->profile->avatar_path);
                }
            }
            
            if ($user->profile) {
                $user->profile->update($profileData);
            } else {
                $user->profile()->create($profileData);
            }
            
            DB::commit();
            
            return redirect()->back()->with('success', 'Profile updated successfully!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Profile update failed: '.$e->getMessage());
            return redirect()->back()->with('error', 'Failed to update profile');
        }
    }

    /**
     * Update the user's last login time.
     */
    public function updateLastLogin()
    {
        $user = Auth::user();
        
        if ($user->profile) {
            $user->profile->update(['last_login_at' => now()]);
        } else {
            UserProfile::create([
                'user_id' => $user->id,
                'last_login_at' => now()
            ]);
        }
        
        return response()->json(['success' => true]);
    }
}