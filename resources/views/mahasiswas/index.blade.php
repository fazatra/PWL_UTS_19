@extends('mahasiswas.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>Posyandu Asyik Malang</h2>
 </div>
 
<form class="form-left my-4" method="get" action="{{ route('search') }}">
    <div class="form-group w-80 mb-3">
        <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Search">
        <button type="submit" class="btn btn-secondary mb-1">Cari</button>
        <a class="btn btn-success right" href="{{ route('mahasiswas.create') }}" style="margin-left:9cm"> Input Data</a>
    </div>
</form>
 </div>
 </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif


 <table class="table table-bordered">
 <tr>
 <th>No_Urut</th>
 <th>Nama</th>
 <th>Tanggal Lahir</th>
 <th>Alamat</th>
 <th>Bb_Lahir</th>
 <th>Tb_Lahir</th>
 <th>Nama_Ortu</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($mahasiswas as $Mahasiswa)
 <tr>

 <td>{{ $Mahasiswa->No_Urut }}</td>
 <td>{{ $Mahasiswa->Nama }}</td>
 <td>{{ $Mahasiswa->Tanggal_Lahir }}</td>
 <td>{{ $Mahasiswa->Alamat }}</td>
 <td>{{ $Mahasiswa->Bb_Lahir }}</td>
 <td>{{ $Mahasiswa->Tb_Lahir }}</td>
 <td>{{ $Mahasiswa->ama_Ortu }}</td>
 <td>
 <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">

 <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->No_Urut) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->No_Urut) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 {!! $mahasiswas->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection