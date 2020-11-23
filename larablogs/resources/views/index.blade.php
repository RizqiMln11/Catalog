<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="{{ asset('newtmp/js/bootstrap.min.js')}}"></script>
<!-- animation-effect -->
<link href="{{ asset('newtmp/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{ asset('newtmp/js/wow.min.js')}}"></script>
<!-- //animation-effect -->
</head>
<body>
        @include('includes.header')
        <div class="header-bottom">
                <div class="container">
                    <div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <h1><a href="index.html">BIKIN NEWS INDONESIA</a></h1>
                        <p><label class="of"></label>Berkakrya Untuk Negeri<label class="on"></label></p>
                    </div>
                </div>
            </div>

<div class="banner" style="background-image: url('{{ $limit->featured }}')">
<div class="container">
		<h2>{{ $limit->title }}</h2>
		<p>{{ $limit->content }}</p>
        <a href="{{ route('post.single', ['slug' => $limit->slug]) }}">Baca Sekarang..</a>
</div>
</div>
<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
                        @foreach ($full as $ctg)
                            <li role="presentation"><a href="#{{ $ctg->name }}" id="{{ $ctg->name }}-tab" role="tab" data-toggle="tab" aria-controls="{{ $ctg->name }}" aria-expanded="true">{{ $ctg->name }}</a></li>
                            {{-- <li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">TRAVEL</a></li>
                            <li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">MUSIC</a></li> --}}
                        @endforeach
                        
					</ul>
					<div id="myTabContent" class="tab-content">
                      @foreach ($full as $ctg)
						<div role="tabpanel" class="tab-pane fade" id="{{ $ctg->name }}" aria-labelledby="{{ $ctg->name }}-tab">
                            
                           @foreach($pst as $post)
                            @if($post->category->name == $ctg->name)
                                <div class="col-md-4 col-sm-5 tab-image">
                                    <img src="{{ $post->featured }}" class="img-responsive" alt="{{ $post->featured }}">
                                </div>
                            @endif
                           @endforeach
                            
							<div class="clearfix"></div>
                        </div>
                      @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
            <div class="tech-no">
                @foreach($pst as $post)
                    <div class="wthree">
                        <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <div class="tch-img">
                                    <a href="{{ route('post.single', ['slug' => $post->slug]) }}"><img src="{{ $post->featured }}" class="img-responsive" alt=""></a>
                                </div>
                        </div>
                        <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                                <h3 style="display:block;text-overflow: ellipsis;width: 270px;overflow: hidden; white-space: nowrap;"><a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                <h6>BY <a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->User->name }} </a>{{ $post->created_at->format('d M y') }}</h6>
                                 <p style="display:block;text-overflow: ellipsis;width: 290px;overflow: hidden; white-space: nowrap;">{{ $post->content }}</p>
                                    <div class="bht1">
                                        <a href="{{ route('post.single', ['slug' => $post->slug]) }}">Baca Sekarang..</a>
                                    </div>
                                    <div class="clearfix"></div>
                            
                        </div>
                            <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				@include('includes.pops')
				
			
		</div>
		<!-- technology-right -->
	</div>
</div>
@include('includes.footer')
</body>
</html>