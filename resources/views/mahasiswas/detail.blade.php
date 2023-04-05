@extends('mahasiswas.layout')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Data
 </div>
 <div class="card-body">
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>No_Urut: </b>{{$Mahasiswa->No_Urut}}</li>
    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->Nama}}</li>
    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Mahasiswa->Tanggal_Lahir}}</li>
    <li class="list-group-item"><b>Alamat: </b>{{$Mahasiswa->Alamat}}</li>
    <li class="list-group-item"><b>Bb_Lahir: </b>{{$Mahasiswa->Bb_Lahir}}</li>
    <li class="list-group-item"><b>Tb_Lahir: </b>{{$Mahasiswa->Tb_Lahir}}</li>
    <li class="list-group-item"><b>Nama_Ortu: </b>{{$Mahasiswa->Nama_Ortu}}</li>
    </ul>
    </div>
    <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
    </div>
    </div>
   </div>
   @endsection