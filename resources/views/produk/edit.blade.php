@extends('layouts.menutop')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h3 class="mb-4">Edit Data Produk</h3>

        <form action="{{url('produk/' . $row->id_produk)}}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label>Gambar Produk</label>
                <input type="text" class="form-control" name="gambar_produk" value="{{ $row->nama_produk}}"></>
            </div>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="{{ $row->nama_produk}}"></>
            </div>
            <div class="mb-3">
                <label>Stok Harga</label>
                <input type="text" class="form-control" name="stok_produk" value="{{ $row->stok_produk}}"></>
            </div>
            <div class="mb-3">
                <label>Harga Produk</label>
                <input type="text" class="form-control" name="harga_produk" value="{{ $row->harga_produk}}"></>
            </div>
            <div class="mb-3">
                <a href="{{url('produk/')}}"><input type="submit" value="BATAL" class="btn btn-danger"></a>
                <input type="submit" value="UPDATE" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection