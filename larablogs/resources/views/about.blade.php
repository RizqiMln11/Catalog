{{-- 
@extends('layouts.frontend')

@section('content')

 <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">About Us. </h1>
                <p class="lead">
                {{ $profile->about }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                <p>
                <img src="{{ $profile->avatar }}" 
                     srcset=" 
                             {{ $profile->avatar }} 1000w, 
                             {{ $profile->avatar }} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                <hr>

                <div class="row block-1-2 block-tab-full">
                    <div class="col-block">
                        <h4 class="quarter-top-margin">Facebook.</h4>
                        <a href="{{ $profile->facebook }}">{{ $profile->facebook }}</a>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Youtube</h4>
                        <a href="{{ $profile->youtube }}">{{ $profile->youtube }}</a>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Our Mission.</h4>
                        <p>Nabra's Code Indonesia ingin menjadi sebuah Software House yang dapat bersaing dengan perusahaan lain namun dapat memberi kepuasan lebih kepada customer. Nilai lebih tersebut antara lain adalah service , garansi ,training serta kosultasi bagi customer yang mengalami kesulitan dalam menjalankan sistem yang dikomputerisasi</p>
                    </div>

                    <div class="col-block">
                        <h4 class="quarter-top-margin">Our Vision.</h4>
                        <p>Menjadi Software House teknologi informasi yang mampu mendorong kemajuan industri telekomunikasi dan pengembangan sumber daya manusia indonesia.</p>
                    </div>

                </div>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> 

@endsection --}}
<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Singlepage :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('newtmp/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="{{ asset('newtmp/css/style.css')}}" rel='stylesheet' type='text/css' />	
<script src="{{ asset('newtmp/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('newtmp/js/bootstrap.min.js')}}"></script>
<!-- animation-effect -->
<link href="{{ asset('newtmp/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{ asset('newtmp/js/wow.min.js')}}"></script>
</head>
<body>
    @include('includes.header')
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">BIKIN NEWS INDONESIA</a></h1>
				<p><label class="of"></label>Berkakrya Untuk Negeri<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
            <div class="col-md-9 technology-left">
                    <div class="w3agile-1">
                        <div class="welcome">
                            <div class="welcome-top heading">
                                <h2 class="w3">Selamat Datang</h2>
                                <div class="welcome-bottom">
                                    <img src="images/t4.jpg" class="img-responsive" alt="">
                                    <p>
                                        {{ $profile->about }}
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="welcome-top heading">
                                <h2 class="w3">Misi & Visi</h2>
                                <div class="welcome-bottom">
                                    <img src="images/t4.jpg" class="img-responsive" alt="">
                                    <p>
                                        {{ $profile->vision }}
                                    </p>
                                    <p>
                                        {{ $profile->mission }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="team">	
                            <h3 class="team-heading">Anggota</h3>
                            <div class="team-grids">
                                <div class="col-md-6 team-grid">
                                    <div class="team-grid1">
                                        <img src="{{ $profile->avatar }}" alt=" " class="img-responsive">
                                        <div class="p-mask">
                                            <p>Menjadi Software House teknologi informasi yang mampu mendorong kemajuan industri telekomunikasi dan pengembangan sumber daya manusia indonesia.</p>
                                            
                                        </div>
                                    </div>
                                    <h5>{{ $profile->user->name }}<span>Co-Founder & Programmer</span></h5>
                                    <ul class="social">
                                    <li><a class="social-facebook" href="{{ $profile->facebook }}">
                                            <i></i>
                                            <div class="tooltip"><span>Facebook</span></div>
                                            </a></li>
                                        <li><a class="social-twitter" href="{{ $profile->youtube }}">
                                            <i></i>
                                            <div class="tooltip"><span>Youtube</span></div>
                                            </a></li>
                                        <li><a class="social-google" href="#">
                                            <i></i>
                                            <div class="tooltip"><span>Google+</span></div>
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 team-grid">
                                    <div class="team-grid1">
                                        <img src=" ../images/Albaab.jpg " alt=" class="img-responsive">
                                        <div class="p-mask">
                                            <p>Bikin Kode Indonesia adalah perusahaan teknologi yang fokus mengembangkan perangkat lunak baik itu perangkat lunak website dan perangkat lunak lainnya.</p>
                                            
                                        </div>
                                    </div>
                                    <h5>Muhammad Habib Ulil Albaab<span>Leader Bikin Kode Indonesia</span></h5>
                                    <ul class="social">
                                        <li><a class="social-facebook" href="#">
                                            <i></i>
                                            <div class="tooltip"><span>Facebook</span></div>
                                            </a></li>
                                        <li><a class="social-twitter" href="#">
                                            <i></i>
                                            <div class="tooltip"><span>Twitter</span></div>
                                            </a></li>
                                        <li><a class="social-google" href="#">
                                            <i></i>
                                            <div class="tooltip"><span>Google+</span></div>
                                            </a></li>
                                    </ul>
                                </div>
                                
                            
                                <div class="clearfix"> </div>
                            </div>				
                        </div>
                        </div>
                    </div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
			@include('includes.pops')
        </div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
@include('includes.footer')
</body>
</html>