<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buyer_Summery;
use Illuminate\Support\Facades\Storage;

class Buyer_SummeryController extends Controller
{
    public function Index(){
        
        $buyers=Buyer_Summery::all();

        return view('admin.Buyers.Buyer_Summery',compact('buyers'));
    } 


    public function storebuyer(Request $request)
    {
        $validatedData=$request->validate([
            'verified_exporters'=>'required|string|max:255',
            'product_categories'=>'required|string|max:255',
            'monthly_transactions'=>'required|string|max:255',
            'avg_response_time'=>'required|string|max:255',
            
            
        ]);

        

        Buyer_Summery::create([
            'verified_exporters'=>$validatedData['verified_exporters'],
            'product_categories'=>$validatedData['product_categories'],
            'monthly_transactions'=>$validatedData['monthly_transactions'],
            'avg_response_time'=>$validatedData['avg_response_time'],
        ]);

        return redirect()->back()->with('success','Summery add Succesfully!');
    }

    public function updatebuyer(Request $request){
        $validatedData=$request->validate([
            
            'verified_exporters'=>'required|string|max:255',
            'product_categories'=>'required|string|max:255',
            'monthly_transactions'=>'required|string|max:255',
            'avg_response_time'=>'required|string|max:255',
        ]);

       
        $update =Buyer_Summery::find($request->buyer_id); 
        $update->verified_exporters = $validatedData['verified_exporters'];
        $update->product_categories = $validatedData['product_categories'];
        $update->monthly_transactions = $validatedData['monthly_transactions'];
        $update->avg_response_time = $validatedData['avg_response_time'];

        $update->save();

        return redirect()->back()->with('success','Summery update Succesfully!');
    }

    public function deletebuyer($id){
        $delete=Buyer_Summery::find($id);
        $delete->delete();

        return redirect()->back()->with('success','Summery delete Succesfully!');
    }
}
