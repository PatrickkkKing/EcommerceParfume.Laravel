@extends('layouts.menutop')
@extends('layouts.navbar')

@section('content')
    <div class="container">
        <h3 class="p-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle">
            Selamat Datang, {{ Auth::user()->name }}.</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">    
                    <div class="card-header text-bg-success d-flex">    
                        <a>PENGGUNA</a>
                        <h2>2</h2>
                    </div>
                    <div class="card-footer bg-transparent border-secondary-subtle bg-body-secondary fw-lighter" style="color: blueviolet">
                        Lihat Detail <a class="btn float-end" href="{{ url('kategori/')}}"><img src="{{url('../resources/img/delete.png')}}" alt="Bootstrap" width="10" height="10"></a></td>
                    </div>
            </div>

        </div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{url('../resources/img/edt.png')}}" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
@endsection