@extends('layouts.menutop')
@extends('layouts.navbar')

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3>Input Data Produk</h3>
        </div>

        <form action="{{url('/produk')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Gambar Produk</label>
                <input type="text" name="gambar_produk" class="form-control">
            </div>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control">
            </div>
            <div class="mb-3">
                <label>Stok Produk</label>
                <input type="text" name="stok_produk" class="form-control">
            </div>
            <div class="mb-3">
                <label>Harga Produk</label>
                <input type="text" name="harga_produk" class="form-control">
            </div>
            <div class="mb-3">
                <a href="{{url('produk/')}}" value="BATAL" class="btn btn-danger">BATAL</a>
                <a href="{{url('produk/create')}}" value="REFRESH" class="btn btn-success">REFRESH</a>
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection