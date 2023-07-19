@extends('layouts.menutop')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h3 class="mb-4">Edit Data Kategori</h3>

        <form action="{{url('kategori/' . $row->id_kategori)}}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label>Kode Kategori</label>
                <input type="text" class="form-control" name="kode_kategori" value="{{ $row->kode_kategori}}"></>
            </div>
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" value="{{ $row->nama_kategori}}"></>
            </div>
            <div class="mb-3">
                <a href="{{url('kategori/')}}"><input type="submit" value="BATAL" class="btn btn-danger"></a>
                <input type="submit" value="UPDATE" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection