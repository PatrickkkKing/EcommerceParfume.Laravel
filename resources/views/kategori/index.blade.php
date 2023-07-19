@extends('layouts.menutop')
@extends('layouts.navbar')

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Data Kategori
                <a class="btn btn-sm float-end" href="{{url('kategori/create')}}"><input type="submit" value="TAMBAH" class="btn btn-success"></a>
            </h3>
        </div>
    <div class="overflow-x-auto">
        <table class="table table-bordered border-secondary primary" style="text-align: center;">
            <tr>
                <th>No</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        @foreach ($rows as $row)
    
            <tr>
                <td>{{ $row->id_kategori}}</td>
                <td>{{ $row->kode_kategori}}</td>
                <td>{{ $row->nama_kategori }}</td>
                <td><a class="btn btn-primary" href="{{ url('kategori/'. $row->id_kategori. '/edit')}}"><img src="{{url('../resources/img/edit.png')}}" alt="Bootstrap" width="20" height="20"></a></td>
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