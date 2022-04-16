<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $latest = DB::table('products')
                    ->orderByDesc('created_at')
                    ->limit(3)
                    ->get();

        return view('landingPage',compact('latest'));
    }
    
    public function test()
    {
        return view('tes');
    }
}
