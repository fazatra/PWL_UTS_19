@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Data
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->No_Urut) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
    <label for="No_Urut">No_Urut</label>
    <input type="text" name="No_Urut" class="form-control" id="No_Urut" value="{{ $Mahasiswa->No_Urut }}" aria-describedby="No_Urut" >
    </div>
    <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->Nama }}" aria-describedby="Nama" >
    </div>
    <div class="form-group">
      <label for="Tanggal_Lahir">Tanggal_Lahir</label>
      <input type="text" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" value="{{ $Mahasiswa->Tanggal_Lahir }}" aria-describedby="Tanggal_Lahir" >
      </div>
    <div class="form-group">
    <label for="Alamat">Alamat</label>
    <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $Mahasiswa->Alamat }}" aria-describedby="Alamat" >
    </div>
    <div class="form-group">
    <label for="Bb_Lahir">Bb_Lahir</label>
    <input type="Bb_Lahir" name="Bb_Lahir" class="form-control" id="Bb_Lahir" value="{{ $Mahasiswa->Bb_Lahir }}" aria-describedby="Bb_Lahir" >
    </div>
    <div class="form-group">
    <label for="Tb_Lahir">Tb_Lahir</label>
    <input type="Tb_Lahir" name="Tb_Lahir" class="form-control" id="Tb_Lahir" value="{{ $Mahasiswa->Tb_Lahir }}" aria-describedby="Tb_Lahir" >
    </div>
    <div class="form-group">
      <label for="Nama_Ortu">Nama_Ortu</label>
      <input type="Nama_Ortu" name="Nama_Ortu" class="form-control" id="Nama_Ortu" value="{{ $Mahasiswa->Nama_Ortu }}" aria-describedby="Nama_Ortu" >
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
   </div>
   @endsection