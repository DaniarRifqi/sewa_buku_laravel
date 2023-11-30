<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function lihat_data_peminjam(){
        $Peminjam = ['Jessica',
                'Maryono',
                'Aryanto',
                'Sumanto'
                ];
    return view('Peminjam/lihat_data_peminjam', compact('Peminjam'));
    }
}
