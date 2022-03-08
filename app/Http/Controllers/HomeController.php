<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kid;
use App\Models\diary;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  

        $kids=Kid::all();
        $user=auth()->user();
        return view('home', compact('kids', 'user'));
    
        $diaries=diary::all();
        $kid=auth()->kid();
        return view('home', compact('diaries', 'kids'));
    
    }

    public function mykid() {
        $user=auth()->user()->id;
        $kids=Kid::where('user_id', $user)->get();
        return view('mykid', compact('kids'));
    }
    


       
}


