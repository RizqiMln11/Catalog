<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('newcatalog/images/logo.png')}}">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(env('APP_NAME') == "Laravel") {{ "ERM Technology" }} @else {{ env('APP_NAME') }} @endif</title>

    <!-- Scripts -->
    <script>
       window.laravel = <?php echo json_encode([
  
            'csrf_token' => csrf_token(),

       ]); ?>
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    @yield('styles')

</head>
<body>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                @if(env('APP_NAME') == "Laravel") {{ "ERM Technology" }} @else {{ env('APP_NAME') }} @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            <div class="row">
               @if(Auth::check())

                     <div class="col-lg-4"> 
                    <ul class="list-group">

                         <li class="list-group-item"> 
                        <a href="{{ route('home') }}"> Dashoard</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('categories') }}"> Lihat Category</a>
                        </li>
                        <li class="list-group-item"> 
                        <a href="{{ route('price.list') }}"> Lihat Daftar Harga</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('tags') }}"> Lihat Tags</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href=" {{ route('user.profile') }} ">Profile Perusahaan</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('posts') }}"> Lihat Publish Post </a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('posts.trashed') }}"> Lihat Arsip Post </a>
                        </li>


                        @if(Auth::user()->admin)

                        <li class="list-group-item"> 
                        <a href="{{ route('users') }}"> Pengguna</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href=" {{ route('user.create') }} "> Tambahkan Pengguna Baru</a>
                        </li>

                        @endif

                        <li class="list-group-item"> 
                        <a href=" {{ route('post.create') }} "> Tambahkan Post Baru</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href=" {{ route('price.create') }} "> Tambahkan Harga Barang</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('category.create') }}">Tambahkan Category Baru</a>
                        </li>

                        <li class="list-group-item"> 
                        <a href="{{ route('tag.create') }}"> Tambahkan Tag Baru</a>
                        </li>

                       @if(Auth::user()->admin)
                         <li class="list-group-item"> 
                            <a href=" {{ route('settings') }} "> Informasi Setting </a>
                        </li>
                       @endif

                    </ul>
                </div>

               @endif

                <div class="col-lg-8">
                    @yield('content')
                 </div>

            </div>
        </div>
        </main>


    <script src="/js/app.js"></script>

    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
@yield('scripts')
</body>
</html>
