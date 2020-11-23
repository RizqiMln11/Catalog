{{-- @extends('layouts.frontend')

@section('content')

    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Contact Us.</h1>
                <p class="lead">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.264275726437!2d112.4202058!3d-7.4024194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78102c4835a775%3A0xcf59c7a96568a0a1!2sJolotundo%2C+Jetis%2C+Mojokerto%2C+Jawa+Timur!5e0!3m2!1sid!2sid!4v1538030626134" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> 

                <div class="row">
                    <div class="col-six tab-full">
                        <h4>Where to Find Us</h4>

                        <p>
                         {{ $settings->address }} 
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h4>Contact Info</h4>

                        <p>{{ $settings->contact_email }}<br>
                        	
                         <br>
                        	{{ $settings->contact_number }}
                        </p>

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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css' />	
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
                <div class="contact-section">
                        <h2 class="w3">Kontak</h2>
                            
                        
                            <div class="contact-grids">
                                <div class="col-md-4 contact-grid1">
                                    <h4>Hubungi Kami</h4>
                                    <div class="contact-top">
                                        
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    <ul>
                                            <li><i class="fa fa-location-arrow" aria-hidden="true"></i>{{ $settings->address }} </li>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> {{ $settings->contact_number }}</li>
                                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:info@example.com">{{ $settings->contact_email }}</a></li>
                                        </ul>
        
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15826.264275726437!2d112.4202058!3d-7.4024194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78102c4835a775%3A0xcf59c7a96568a0a1!2sJolotundo%2C+Jetis%2C+Mojokerto%2C+Jawa+Timur!5e0!3m2!1sid!2sid!4v1538030626134" allowfullscreen></iframe> 
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