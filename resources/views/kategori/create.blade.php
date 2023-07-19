@extends('layouts.menutop')
@extends('layouts.navbar')

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3>Input Data Kategori</h3>
        </div>

        <form action="{{url('/kategori')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Kode Kategori</label>
                <input type="text" name="kode_kategori" class="form-control">
            </div>
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control">
            </div>
            <div class="mb-3">
                <a href="{{url('kategori/')}}" value="BATAL" class="btn btn-danger">BATAL</a>
                <a href="{{url('kategori/create')}}" value="REFRESH" class="btn btn-success">REFRESH</a>
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection