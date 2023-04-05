<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
//Fungsi eloquent menampilkan data menggunakan pagination
$mahasiswas = Mahasiswa::paginate(6); //Mengambil 6 isi tabel
$posts = Mahasiswa::orderBy('No_Urut', 'desc')->paginate(6);
return view('mahasiswas.index', compact('mahasiswas'))
->with('i', (request()->input('page', 1) - 1) * 5);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('mahasiswas.create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
// Melakukan validasi data
$request->validate([
'No_Urut' => 'required',
'Nama' => 'required',
'Tanggal_Lahir' => 'required',
'Alamat' => 'required',
'Bb_Lahir' => 'required',
'Tb_Lahir' => 'required',
'Nama_Ortu' => 'required',
]);
// fungsi eloquent untuk menambah data
Mahasiswa::create($request->all());
// Jika data berhasil ditambahkan, akan kembali ke halaman utama
return redirect()->route('mahasiswas.index')
->with('success', 'Data Berhasil Ditambahkan');
}
/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($No_Urut)
{
//menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
$Mahasiswa = Mahasiswa::find($No_Urut);
return view('mahasiswas.detail', compact('Mahasiswa'));
}
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($No_Urut)
{
// menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
$Mahasiswa = Mahasiswa::find($No_Urut);
return view('mahasiswas.edit', compact('Mahasiswa'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $No_Urut)
{
// melakukan validasi data
$request->validate([
'No_Urut' => 'required',
'Nama' => 'required',
'Alamat' => 'required',
'Bb_Lahir' => 'required',
'Tb_Lahir' => 'required',
]);
// fungsi eloquent untuk mengupdate data inputan kita
Mahasiswa::find($No_Urut)->update($request->all());
// jika data berhasil diupdate, akan kembali ke halaman utama
return redirect()->route('mahasiswas.index')
->with('success', 'Data Berhasil Diupdate');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($No_Urut)
{
//fungsi eloquent untuk menghapus data
     Mahasiswa::find($No_Urut)->delete();
     return redirect()->route('mahasiswas.index')
          ->with('success', 'Data Berhasil Dihapus');
     }

     public function search(Request $request)
{
     $keyword = $request->search;
     $mahasiswas = Mahasiswa::where('Nama', 'like', '% . $keyword'. '%')->paginate(5);
     return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
}
};