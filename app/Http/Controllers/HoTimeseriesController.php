<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoTimeseriesController extends Controller
{
    public function index(){
        return view('user.gelombang.peramalan.hotimeseries');
    }
}
