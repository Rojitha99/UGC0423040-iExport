<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permissions\Traits\HasRoles;

class UserController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        $roles = Role::pluck('name','name')->all();
        return view('admin.UserManage.user',compact('users','roles'));
    }

    public function storeuser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->roles);

        
        return redirect()->back()->with('success','User added successfully! ');
    }

    public function updateuser(Request $request){
         $request->validate([
             'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $update=User::find($request->user_id);
        $update->name = $request->name;
        $update->email = $request->email;
        
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $update->save();

        return redirect()->back()->with('success','Permission edit Succesfully!');
    }

    public function deleteuser($id){
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success','User deleted successfully! ');
    }
}

