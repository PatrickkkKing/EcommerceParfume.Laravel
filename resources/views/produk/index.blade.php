@extends('layouts.menutop')
@extends('layouts.navbar')

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Data Produk
                <a class="btn btn-sm float-end" href="{{url('produk/create')}}"><input type="submit" value="TAMBAH" class="btn btn-success"></a>
            </h3>
        </div>
    <div class="overflow-x-auto">
        <table class="table table-bordered border-secondary primary" style="text-align: center;">
            <tr>
                <th>No</th>
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Stok Produk</th>
                <th>Harga Produk</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        @foreach ($rows as $row)
    
            <tr>
                <td>{{ $row->id_produk}}</td>
                <td>{{ $row->gambar_produk}}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->stok_produk }}</td>
                <td>{{ $row->harga_produk }}</td>
                <td><a class="btn btn-primary" href="{{ url('kategori/'. $row->id_produk. '/edit')}}"><img src="{{url('../resources/img/edit.png')}}" alt="Bootstrap" width="20" height="20"></a></td>
                <td>
                    <form action="#" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger"><img src="{{url('../resources/img/delete.png')}}" alt="Bootstrap" width="20" height="20"></button>
                    </form>    
                </td>
            </tr>
        @endforeach
        </table>
        </div>
    </div>
@endsection