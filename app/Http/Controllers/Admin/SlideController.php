<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function Index(){
        
        $sliders=Slider::all();

        return view('admin.slides.index',compact('sliders'));
    } 


    public function storeSlider(Request $request)
    {
        $validatedData=$request->validate([
            'heading'=>'required',
            'description'=>'required|string|max:255',
            'button_name'=>'required|string|max:255',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'more_info_link'=>'nullable|url',
        ]);

        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('slides','public');
        }

        Slider::create([
            'heading'=>$validatedData['heading'],
            'description'=>$validatedData['description'],
            'button_name'=>$validatedData['button_name'],
            'image'=>$imagePath,
            'more_info_link'=>$validatedData['more_info_link'],
            

        ]);

        return redirect()->back()->with('success','Slide add Succesfully!');
    }

    public function updateslider(Request $request){
        $validatedData=$request->validate([
            
            'heading'=>'required',
            'description'=>'required|string|max:255',
            'button_name'=>'required|string|max:255',
            'more_info_link'=>'nullable|url',
        ]);

         if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('slides','public');
        }
        $update = Slider::find($request->slider_id); 
        $update->heading = $validatedData['heading'];
        $update->description = $validatedData['description'];
        $update->button_name = $validatedData['button_name'];

         if($request->hasFile('image')){
            $update->image=$imagePath;
        }
        $update->more_info_link=$validatedData['more_info_link'];
        $update->save();

        return redirect()->back()->with('success','Slide add Succesfully!');
    }

    public function deleteslider($id){
        $delete=Slider::find($id);
        $delete->delete();

        return redirect()->back()->with('success','Slide add Succesfully!');
    }

}


 ?>