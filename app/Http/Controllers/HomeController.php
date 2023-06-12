<?php

namespace App\Http\Controllers;
use App\Models\gelombang;

use Illuminate\Http\Request;

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
        $gelombangs = Gelombang::all();
        return view('user.gelombang.index', compact('gelombangs'));
    }
}
