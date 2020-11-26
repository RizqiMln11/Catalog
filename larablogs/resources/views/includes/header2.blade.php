<header>
    <div class="row">
        <div class="col-md-3 top-info text-left mt-lg-4">
            <h6>Need Help</h6>
            <ul>
                <li>
                    <i class="fas fa-phone"></i> Call</li>
                <li class="number-phone mt-3">{{ $setting->contact_number }}</li>
            </ul>
        </div>
        <div class="col-md-6 logo-w3layouts text-center">
            <h1 class="logo-w3layouts">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('newcatalog/images/logo.png')}}" style="height: 1em;">
                   {{$setting->site_name}}
                   <img src="{{asset('newcatalog/images/logo2.png')}}" style="height: 1em;">
                </a>
            </h1>
        </div>

        <div class="col-md-3 top-info-cart text-right mt-lg-4">
            <ul class="cart-inner-info">
                <li class="button-log">
                    <a class="btn-open" href="#">
                        <span class="fa fa-user" aria-hidden="true"></span>
                    </a>
                </li>
                <li class="galssescart galssescart2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="top_googles_cart" type="submit" name="submit" value="">
                            My Cart
                            <i class="fas fa-cart-arrow-down"></i>
                        </button>
                    </form>
                </li>
            </ul>
            <!---->
            <div class="overlay-login text-left">
                <button type="button" class="overlay-close1">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <div class="wrap">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <div class="login p-5 bg-dark mx-auto mw-100">
                        <form method="POST" action="{{ route('login') }}">
                                    @csrf
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

                        </form>
                    </div>
                    <!---->
                </div>
            </div>
            <!---->
        </div>
    </div>
    <div class="search">
        <div class="mobile-nav-button">
            <button id="trigger-overlay" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <!-- open/close -->
        <div class="overlay overlay-door">
            <button type="button" class="overlay-close">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <form action="#" method="post" class="d-flex">
                <input class="form-control" type="search" placeholder="Search here..." required="">
                <button type="submit" class="btn btn-primary submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

        </div>
        <!-- open/close -->
    </div>
    <label class="top-log mx-auto"></label>
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-mega mx-auto">
                <li class="nav-item @if($_SERVER['REQUEST_URI'] == '/') active @endif">
                    <a class="nav-link ml-lg-0" href="/">Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if($_SERVER['REQUEST_URI'] == '/services') active @endif">
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu mega-menu ">
                        <li>
                            <div class="row">
                                <div class="col-md-4 media-list span4 text-left">
                                    <h5 class="tittle-w3layouts-sub"> Trending </h5><br>
                                    <ul>
                                        @foreach ($catAll as $ctg)
                                        <li class="">
                                            <a href="{{ route('category.single', ['id' => $ctg->id ]) }}">{{$ctg->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @php
                                    $catCount = count($catAll);
                                    $categoryRandId1 = rand(1,$catCount);
                                    $categoryRandId2 = rand(1,$catCount);
                                    $featuredProduct;
                                    $startCount = 1;
                                @endphp
                                @foreach ($catAll as $ctg)
                                    @if($startCount == $categoryRandId1)
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> {{$ctg->name}} </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('category.single', ['id' => $ctg->id ]) }}">
                                                <img src="{{ asset($ctg->gambar)}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @if($startCount == $categoryRandId2)
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> {{$ctg->name}} </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('category.single', ['id' => $ctg->id ]) }}">
                                                <img src="{{ asset($ctg->gambar)}}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @php
                                        $startCount = $startCount+1;
                                    @endphp
                                @endforeach
                            </div>
                            <hr>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($_SERVER['REQUEST_URI'] == '/contact') active @endif">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>

        </div>
    </nav>
</header>