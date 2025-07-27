<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
{
    // Get active slides ordered by their display order
    $slides = \App\Models\Slide::where('is_active', true)
                              ->orderBy('order', 'asc')
                              ->get();
    
    return view('frontend.home', compact('slides'));
}
}
