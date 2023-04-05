<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengalamanKuliah;

class PengalamanKuliahController extends Controller
{
    //
    public function pengalaman()
    {
        $datapengalaman2 = PengalamanKuliah::where('id', 2)->get();
        return view('pengalaman', compact('datapengalaman2'));
    }
}
