<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeSeriesleeController extends Controller
{
    public function index(){
        return view('user.gelombang.peramalan.fuzzy_timeserieslee');
    }

    public function grafik(){
        return view('user.gelombang.peramalan.grafik');
    }
    public function getDataGelombang()
    {
        // Mendapatkan data gelombang dari sumber data (misalnya database atau API)

        $data = [
            [
                "tanggal" => "2023-06-01",
                "gelombang1" => 3,
                "gelombang2" => 5,
                "gelombang3" => 2,
            ],
            [
                "tanggal" => "2023-06-02",
                "gelombang1" => 4,
                "gelombang2" => 6,
                "gelombang3" => 3,
            ],
            [
                "tanggal" => "2023-06-03",
                "gelombang1" => 2,
                "gelombang2" => 4,
                "gelombang3" => 1,
            ],
            // Tambahkan data gelombang lainnya di sini
        ];

        return response()->json($data);
    }
}
