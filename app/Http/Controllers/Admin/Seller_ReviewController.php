<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller_Review;
use Illuminate\Support\Facades\Storage;

class Seller_ReviewController extends Controller
{

    public function Index(){

     $reviews=Seller_Review::all();

        return view('admin.Sellers.Seller_Review',compact('reviews'));
    } 


    public function storeReview(Request $request)
    {
        $validatedData=$request->validate([
            'stars'=>'required|string|max:255', 
            'comment'=>'required|string|max:255',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name'=>'required|string|max:255',
            'company'=>'required|string|max:255',
        ]);

        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('slides','public');
        }

        Seller_Review::create([
            'stars'=>$validatedData['stars'],
            'comment'=>$validatedData['comment'],
            'image'=>$imagePath,
            'name'=>$validatedData['name'],
            'company'=>$validatedData['company'],
            

        ]);

        return redirect()->back()->with('success','Slide add Succesfully!');
    }

    public function updatereview(Request $request){
        $validatedData=$request->validate([
            
            'stars'=>'required|string|max:255', 
            'comment'=>'required|string|max:255',
            'name'=>'required|string|max:255',
            'company'=>'required|string|max:255',
        ]);

         if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('slides','public');
        }
        $update = Seller_Review::find($request->review_id); 
        $update->stars = $validatedData['stars'];
        $update->comment = $validatedData['comment'];
        
         if($request->hasFile('image')){
            $update->image=$imagePath;
        }
        $update->name = $validatedData['name'];
        $update->company=$validatedData['company'];
        $update->save();

        return redirect()->back()->with('success','Slide add Succesfully!');
    }

    public function deletereview($id){
        $delete=Seller_Review::find($id);
        $delete->delete();

        return redirect()->back()->with('success','Slide add Succesfully!');
    }
}
?>
