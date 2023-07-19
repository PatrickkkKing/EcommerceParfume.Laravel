<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <div class="aside1">
        <header>
            <h5 style="color: whitesmoke; margin-bottom : 15px;">Toko Parfume</h5>
            <img src="{{url('../resources/img/admin.png')}}" class="brand">
            <div class="user">{{ Auth::user()->email }}</div>
        </header>
    
        <aside>
            <ul>
                <li>
                    <a href="{{url('menu/')}}">
                        <img class="icon" src="{{url('../resources/img/dashboard.png')}}" alt=""> Home
                    </a>
                </li>
                <li>
                    <a href="{{url('pengguna/')}}">
                        <img class="icon" src="{{url('../resources/img/user.png')}}" alt=""> Data Pengguna
                    </a>
                </li>
                <li>
                    <a href="{{url('kategori/')}}">
                        <img class="icon" src="{{url('../resources/img/kategori.png')}}" alt=""> Data Kategori
                    </a>
                </li>
                <li>
                    <a href="{{url('produk/')}}">
                        <img class="icon" src="{{url('../resources/img/produk.png')}}" alt=""> Data Produk
                    </a>
                </li>
                <li>
                    <a href="{{url('pesanan/')}}">
                        <img class="icon" src="{{url('../resources/img/pesanan.png')}}" alt=""> Data Pesanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <img class="icon" src="{{url('../resources/img/logout.png')}}" alt=""> Logout
                    </a>
                </li>
            </ul>
        </aside>
    
    </div>
</body>
</html>