@extends('layout.main')
    
@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">

                @foreach ($datapengalaman2 as $dt2)
                    <h4 style="font-weight: bold">Pengalaman Kuliah Farhan</h4>
                    <hr>
                    <h5 style="font-weight: bold"></h5>
                    Nama Lengkap :   <br>
                    {{$dt2 -> namaLengkap}}
                    <br><hr>
                
                    <h5 style="font-weight: bold"></h5>
                    Nama panggilan :   <br>
                    {{$dt2 -> namaPanggilan}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Umur :   <br>
                    {{$dt2 -> umur}}
                    <br><hr>

                    <h5 style="font-weight: bold"></h5>
                    Pesan :   <br>
                    {{$dt2 -> pesan}}
                    <br><hr>
                    
            </div>
            
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection