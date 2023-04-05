@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Data
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

                    <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="No_urut">No_urut</label>
                            <input type="text" name="No_urut" class="form-control" id="No_urut" aria-describedby="No_urut" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                            <input type="text" name="Tanggal_Lahir" class="form-control" id="Tanggal_Lahir" aria-describedby="Tanggal_Lahir" >
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label> 
                            <input type="Alamat" name="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="Bb_Lahir">Bb_Lahir</label>
                            <input type="Bb_Lahir" name="Bb_Lahir" class="form-control" id="Bb_Lahir" aria-describedby="Bb_Lahir" >
                        </div>
                        <div class="form-group">
                            <label for="Tb_Lahir">Tb_Lahir</label>
                            <input type="Tb_Lahir" name="Tb_Lahir" class="form-control" id="Tb_Lahir" aria-describedby="Tb_Lahir" >
                        </div>
                        <div class="form-group">
                            <label for="Nama_Ortu">Nama_Ortu</label>
                            <input type="text" name="Nama_Ortu" class="form-control" id="Nama_Ortu" aria-describedby="Nama_Ortu" >
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
