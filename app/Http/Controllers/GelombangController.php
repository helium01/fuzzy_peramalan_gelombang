<?php

namespace App\Http\Controllers;

use App\Models\gelombang;
use Illuminate\Http\Request;
use App\Imports\gelombangImport;

class GelombangController extends Controller
{
    public function index(Request $request)
    {
        $entries = $request->get('entries', 10);
        $gelombangs = Gelombang::simplePaginate($entries);
        $gelombang = Gelombang::all();
        return view('user.gelombang.index', compact('gelombangs','gelombang'));
    }
   
    public function create()
    {
        return view('user.gelombang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tinggi_gelombang' => 'required|integer',
        ]);

        Gelombang::create($validatedData);

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil ditambahkan');
    }

    public function edit(Gelombang $gelombang)
    {
        return view('user.gelombang.edit', compact('gelombang'));
    }

    public function update(Request $request, Gelombang $gelombang)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tinggi_gelombang' => 'required|integer',
        ]);

        $gelombang->update($validatedData);

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil diperbarui');
    }

    public function destroy(Gelombang $gelombang)
    {
        $gelombang->delete();

        return redirect()->route('user.gelombang.index')->with('success', 'Gelombang berhasil dihapus');
    }
    // upload exel
    public function uploadfile(Request $request)
{

    // Validasi file upload
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Ambil file yang diupload
    $file = $request->file('file');

    // Proses import data dari file Excel
    $import = new gelombangImport();
    \Maatwebsite\Excel\Facades\Excel::import($import, $file);

    // Validasi hasil import
    // if ($import->failures()->isNotEmpty()) {
    //     // Jika terjadi kesalahan saat import, tampilkan pesan error
    //     return redirect()->back()->withErrors($import->failures());
    // }

    // Jika import berhasil, lakukan operasi lain yang diperlukan

    // Redirect atau berikan respons sesuai kebutuhan
    return redirect('/')->with('success', 'File Excel berhasil diupload');
}

    // uji perhitungan
    function fuzzySetSupp($set)
{
    // Nilai-nilai sup(Aj) yang relevan sesuai dengan tabel fuzzyfikasi
    $supps = [
        'A1' => 2.25,
        'A2' => 3.75,
        'A4' => 6.75,
    ];
    
    return $supps[$set];
}
function calculateMAPE($actualValues, $predictedValues)
{
    $sumAPE = 0;
    $count = count($actualValues);

    for ($i = 0; $i < $count; $i++) {
        $actual = $actualValues[$i];
        $predicted = $predictedValues[$i];

        // Memeriksa apakah nilai aktual tidak nol
        if ($actual != 0) {
            $ape = abs(($actual - $predicted) / $actual) * 100;
            $sumAPE += $ape;
        }
    }

    $mape = $sumAPE / $count;
    return $mape;
}
    public function coba(){
        // $data=gelombang::all();
        // $Dmin = gelombang::min('tinggi_gelombang');
        // $Dmax = gelombang::max('tinggi_gelombang');
        // $n =$data->count();
        // $mean = ($Dmin + $Dmax) / 2;
        // // Menghitung varians
        // $variance = (($Dmin - $mean) ** 2 + ($Dmax - $mean) ** 2) / $n;
        // // Menghitung standar deviasi (𝜎)
        // $sigma = sqrt($variance);
        // dd($sigma);
       
        // Ambil data ketinggian gelombang dari tabel gelombang
        $gelombangData = gelombang::all();

        // Fuzzifikasi data ketinggian gelombang
        foreach ($gelombangData as $data) {
            $ketinggian = $data->tinggi_gelombang;

            // Fuzzifikasi menggunakan himpunan linguistik yang telah ditentukan
            $linguistik = '';
            if ($ketinggian >= 1.5 && $ketinggian <= 3) {
                $linguistik = 'A1'; // Penurunan Besar
            } elseif ($ketinggian > 3 && $ketinggian <= 4.5) {
                $linguistik = 'A2'; // Penurunan
            } elseif ($ketinggian > 4.5 && $ketinggian <= 6) {
                $linguistik = 'A3'; // Tidak Ada Perubahan
            } elseif ($ketinggian > 6 && $ketinggian <= 7.5) {
                $linguistik = 'A4'; // Kenaikan
            }
            // Simpan hasil fuzzifikasi ke dalam database atau lakukan operasi lainnya
            // Misalnya: $data->linguistik = $linguistik; $data->save();
        
            // dump([
            //     'ketinggian' => $ketinggian,
            //     'linguistik' => $linguistik
            // ]);
        }
        // Tabel aturan transisi
        // $aturanTransisi = [
        //     'A1' => 'A2',
        //     'A3' => 'A1',
        //     'A1' => 'A4',
        //     'A2' => 'A1',
        //     'A2' => 'A2',
        //     'A2' => 'A3',
        //     'A4' => 'A3',
        //     'A4' => 'A4'
        // ];

        // // Contoh penerapan aturan transisi
        // $transisiAwal = 'A1';
        // $transisiAkhir = $aturanTransisi[$transisiAwal];

        // // Tampilkan hasil aturan transisi
        // echo "Transisi Awal: $transisiAwal" . PHP_EOL;
        // echo "Transisi Akhir: $transisiAkhir" . PHP_EOL;

        // Variabel yang diberikan
       // Variabel-variabel yang diperlukan
           // Variabel yang diberikan
            // Mendefinisikan variabel-variabel yang diperlukan
           // Mendefinisikan tanggal yang akan diprediksi
           $dataGelombang=gelombang::all();
           $prediksi = [];
           foreach ($dataGelombang as $index => $data) {
            $tanggal = $data['tanggal'];
            $ketinggian = $data['tinggi_gelombang'];
        
            // Mengambil data gelombang dari database berdasarkan tanggal sebelumnya
            $dataSebelumnya = gelombang::where('tanggal', '<', $tanggal)->orderBy('tanggal', 'desc')->first();
            // Pengecekan apakah dataSebelumnya ada
            if ($dataSebelumnya) {
                $d_prev = $dataSebelumnya->tinggi_gelombang;

                // Melakukan perhitungan dan pemrosesan prediksi
                // ...
            } else {
                // Jika dataSebelumnya kosong, maka berikan nilai default atau penanganan lainnya
                $d_prev = 0;

                // Melakukan perhitungan dan pemrosesan prediksi
                // ...
            }
        
            // Mendefinisikan aturan transisi (misalnya dari tabel 6)
            $transitions = [
                'r1' => ['A1', 'A1'],
                'r2' => ['A1', 'A2'],
                'r3' => ['A1', 'A4'],
            ];
        
           // Menghitung nilai prediksi
$sum = 0;
$count = 0;
foreach ($transitions as $rule) {
    $antecedent = $rule[0];
    $consequent = $rule[1];

    // Hitung nilai sum berdasarkan sup(Aj) yang relevan
    if ($antecedent == 'A1') {
        $sum += $this->fuzzySetSupp('A1');
        $count++;
    }
    if ($antecedent == 'A2') {
        $sum += $this->fuzzySetSupp('A2');
        $count++;
    }
    if ($antecedent == 'A4') {
        $sum += $this->fuzzySetSupp('A4');
        $count++;
    }
}

// Hitung nilai prediksi
$prediction = $d_prev + ($sum / $count);
$prediksi[] = [
    'tanggal' => $tanggal,
    'tinggi_gelombang'=>$ketinggian,
    'hasil_prediksi' => $prediction,
    'mape' => 0, // Inisialisasi nilai MAPE dengan 0
];

// Menyimpan nilai prediksi ke dalam data gelombang
$dataGelombang[$index]['prediksi'] = $prediction;

// Menghitung nilai MAPE
$actualValues = []; // Array untuk menyimpan nilai aktual
$predictedValues = []; // Array untuk menyimpan nilai prediksi

foreach ($dataGelombang as $data) {
    $actualValues[] = $data['tinggi_gelombang'];
    $predictedValues[] = $data['prediksi'];
}

$mape = $this->calculateMAPE($actualValues, $predictedValues);

// Memasukkan nilai MAPE ke dalam array prediksi
$prediksi[count($prediksi) - 1]['mape'] = $mape;

// Menampilkan hasil prediksi dan nilai MAPE

$hasil_prediksi_pe = [];

foreach ($prediksi as $data) {
    $tanggal = $data['tanggal'];
    $hasil_prediksi = $data['hasil_prediksi'];
    $ketinggian_asli = $data['tinggi_gelombang'];

    // Menghitung Percentage Error (PE)
    if ($ketinggian_asli != 0) {
        $pe = ($ketinggian_asli - $hasil_prediksi) ;
    } else {
        $pe = 0; // Assign a default value in case $ketinggian_asli is zero
    }
    // Membuat array untuk menyimpan tanggal dan nilai PE
    $hasil_prediksi_pe[] = [
        'tanggal' => $tanggal,
        'pe' => $pe,
    ];
}
            }
            
dd($hasil_prediksi_pe);
        }}