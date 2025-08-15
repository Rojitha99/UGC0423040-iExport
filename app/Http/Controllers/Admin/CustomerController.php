<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CustomerController extends Controller
{


// CustomerController.php

public function __construct()
{
    $this->middleware('auth'); // Require authentication for all methods
}

public function index()
{
    // ONLY get posts for the currently logged-in user
    $userPosts = auth()->user()->customers()->latest()->get();
    
    return view('frontend.post', [
        'customers' => $userPosts,
        'currentUserId' => auth()->id() // Pass for view checks
    ]);
}


    public function storeCustomer(Request $request)
    {
        // dd(request()->all());
        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Description' => 'required|string',
            'quantity' => 'required|numeric|max:10000',
            'price' => 'required|decimal:2',
            'contact_number' => 'required|string|max:20',
            'urgent' => 'required|boolean',
            'more_info_link' => 'nullable|url',
        ]);

        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('customer','public');
        }

        Customer::create([
            'post_title' => $validatedData['post_title'],
            'category' => $validatedData['category'],
            'product_category' => $validatedData['product_category'],
            'place' => $validatedData['place'],
            'company_name' => $validatedData['company_name'],
            'image' => $imagePath,
            'Description' => $validatedData['Description'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'contact_number' => $validatedData['contact_number'],
            'urgent' => $validatedData['urgent'],
            'more_info_link' => $validatedData['more_info_link'],
            'user_id' => auth()->id()
            

        ]);

       

        $validated['user_id'] = FacadesAuth::id();
   

        return redirect()->back()->with('success', 'Customer post added successfully!');
    }

    public function updateCustomer(Request $request)
    {
        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Description' => 'required|string',
            'quantity' => 'required|numeric|max:10000',
            'price' => 'required|decimal:2',
            'contact_number' => 'required|string|max:20',
            'urgent' => 'required|boolean',
            'more_info_link' => 'nullable|url',
            
        ]);

        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('customer','public');
        }
        $update = Customer::find($request->customer_id); 
        $update->post_title = $validatedData['post_title'];
        $update->category = $validatedData['category'];
        $update->product_category = $validatedData['product_category'];
        $update->place = $validatedData['place'];
        $update->company_name = $validatedData['company_name'];
        if($request->hasFile('image')){
            $update->image=$imagePath;
        }
        $update->Description = $validatedData['Description'];
        $update->quantity = $validatedData['quantity'];
        $update->price = $validatedData['price'];
        $update->contact_number = $validatedData['contact_number'];
        $update->urgent = $validatedData['urgent'];
        $update->more_info_link = $validatedData['more_info_link'];

        $update->save();

       

    
    
    // Add ownership check
    if (!$customer || $customer->user_id !== auth()->id()) {
        abort(403, 'Unauthorized action.');
    }
    
 
    
 
    
// ... rest of your delete logic ...


        return redirect()->back()->with('success', 'Customer post updated successfully!');
    }

    

    public function deleteCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        
        // Delete associated image
        if ($customer->image) {
            Storage::disk('public')->delete($customer->image);
        }
        if ($customer->user_id !== auth()->id()) {
        abort(403, 'Unauthorized action.');
    }
        
        $customer->delete();

        return redirect()->back()->with('success', 'Customer post deleted successfully!');
    }

    public function filter(Request $request){
            $customers = Customer::query();

    // Urgent filter
    if ($request->has('urgent')) {
        $customers->where('urgent', 1);
    }

    // Category filter
    if ($request->category && $request->category !== 'all') {
        $customers->where('product_category', $request->category);
    }

    // Location filter
    if ($request->location && $request->location !== 'all') {
        $customers->where('place', $request->location);
    }

    // Sorting
    if ($request->sortBy) {
        switch ($request->sortBy) {
            case 'newest':
                $customers->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $customers->orderBy('created_at', 'asc');
                break;
            case 'priceLow':
                $customers->orderBy('price', 'asc');
                break;
            case 'priceHigh':
                $customers->orderBy('price', 'desc');
                break;
        }
    }

    $customers = $customers->paginate(10);
    return view('frontend.product.cinnamon', compact('customers'));
    }



    


}