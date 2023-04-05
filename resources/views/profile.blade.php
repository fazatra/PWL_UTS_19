@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                
                    <h4 style="font-weight: bold">Profile</h4>
                    <hr>
                    <center>
                    <img src="dist/img/Logo.png" alt="foto joms" style="width:250px"> <br><br> 
                    </center>
                    
                    @foreach ($profile2 as $p2)
                    <h4 style="font-weight: bold">Biodata Doktor Farhan</h4>
                    <hr>
                    <h5 style="font-weight: bold"></h5>
                    Nama Lengkap :   <br>
                    {{$p2 -> namaLengkap}}
                    <br>
                    <h5 style="font-weight: bold"></h5>
                    Tempat Lahir :   <br>
                    {{$p2 -> tempatLahir}}
                    <br>
                    <h5 style="font-weight: bold"></h5>
                    Nim :   <br>
                    {{$p2 -> nim}}
                    <br>
                    <h5 style="font-weight: bold"></h5>
                    Absen :   <br>
                    {{$p2 -> absen}}
                    <br><hr><br>

                    @endforeach

                    

                    {{-- <h5 style="font-weight: bold">Biodata {{ $full_nameF }}</h5>
                    Nama Lengkap : {{ $full_nameF }} <br>
                    Tempat Lahir  : {{ $lahirF }} <br>
                    NIM : {{ $nimF }} <br>
                    Absen : {{ $absenF }} <br><br>
                    {{ $bioF }}<br><hr>
                <br>
                    <h5 style="font-weight: bold">Biodata {{ $full_nameN }}</h5>
                    Nama Lengkap : {{ $full_nameN }} <br>
                    Tempat Lahir  : {{ $lahirN }} <br>
                    NIM : {{ $nimN }} <br>`
                    Absen : {{ $absenN }} <br><br>
                    {{ $bioN }}<br><hr>
                <br>
                    <h5 style="font-weight: bold">Biodata {{ $full_nameK }}</h5>
                    Nama Lengkap : {{ $full_nameK }} <br>
                    Tempat Lahir  : {{ $lahirK }} <br>
                    NIM : {{ $nimK }} <br>
                    Absen : {{ $absenK }} <br><br>
                    {{ $bioK }}<br><hr> --}}
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection