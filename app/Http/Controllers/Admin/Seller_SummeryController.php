<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller_Summery;
use Illuminate\Support\Facades\Storage;

class Seller_SummeryController extends Controller
{
     public function Index(){
        
        $sellers=Seller_Summery::all();

        return view('admin.Sellers.Seller_Summery',compact('sellers'));
    } 


    public function storeseller(Request $request)
    {
        $validatedData=$request->validate([
            'verified_sellers'=>'required|string|max:255',
            'countries_served'=>'required|string|max:255',
            'districts_covered'=>'required|string|max:255',
            'annual_exports'=>'required|string|max:255',
            
            
        ]);

        

        Seller_Summery::create([
            'verified_sellers'=>$validatedData['verified_sellers'],
            'countries_served'=>$validatedData['countries_served'],
            'districts_covered'=>$validatedData['districts_covered'],
            'annual_exports'=>$validatedData['annual_exports'],
        ]);

        return redirect()->back()->with('success','Summery add Succesfully!');
    }

    public function updateseller(Request $request){
        $validatedData=$request->validate([
            
            'verified_sellers'=>'required|string|max:255',
            'countries_served'=>'required|string|max:255',
            'districts_covered'=>'required|string|max:255',
            'annual_exports'=>'required|string|max:255',
        ]);

       
        $update =Seller_Summery::find($request->seller_id); 
        $update->verified_sellers = $validatedData['verified_sellers'];
        $update->countries_served = $validatedData['countries_served'];
        $update->districts_covered = $validatedData['districts_covered'];
        $update->annual_exports = $validatedData['annual_exports'];

        $update->save();

        return redirect()->back()->with('success','Summery update Succesfully!');
    }

    public function deleteseller($id){
        $delete=Seller_Summery::find($id);
        $delete->delete();

        return redirect()->back()->with('success','Summery delete Succesfully!');
    }
}
