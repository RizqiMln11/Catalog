{{-- @extends('layouts.frontend')

@section('content')


<section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="{{ $post->featured }}" 
                         srcset="{{ $post->featured }}" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $post->title }}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{ $post->created_at }}</li>
                    <li class="byline">
                        By
                        <a href="# ">Admin</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">
                
                <p>{!! $post->content !!}
                </p>

                <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>Posted In: </h5>
                        <span class="entry__tax-list">
                            {{ $settings->address }} 
                        </span>
                    </div>


                    <div class="entry__tags">
                        <h5>Tags: </h5>
                        <span class="entry__tax-list entry__tax-list--pill">
                            @foreach($post->tags as $tag)

                                        <a href="{{ route('tag.single', ['id' => $tag->id]) }}" class="w-tags-item">{{ $tag->tag }}</a>

                            @endforeach
                        </span>
                    </div> 
                    <br>
                    <br>
                    
                    <div class="entry__tags">
                        <h5>Share With: </h5>
                             <div class="addthis_inline_share_toolbox_ioe4"> </div>
                        </span>
                    </div>

                     <!-- end entry__cat -->

                    <!-- end entry__tags -->
                </div> <!-- end s-content__taxonomies -->

                <div class="entry__author">
                    <img src="{{ asset($profile->avatar) }}" alt="">

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>Posted by</span>
                            <a href="#0">{{ $profile->user->name }}e</a>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
                            {{ $profile->about }}
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->


        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                 @if($prev)
                    <div class="col-six s-content__prev">
                        <a href="{{ route('post.single', ['slug' => $prev->slug ]) }}" rel="prev">
                            <span>Previous Post</span>
                            {{ $prev->title }}
                        </a>
                    </div>
                @endif

                @if($next)

                    <div class="col-six s-content__next">
                        <a href="{{ route('post.single', ['slug' => $next->slug ]) }}" rel="next">
                            <span>Next Post</span>
                            {{ $next->title }}
                        </a>
                    </div>
                @endif
            </div>
        </div> <!-- end s-content__pagenav -->

        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">

                    

                 @include('includes.disqus')
                </div> <!-- end col-full -->
            </div> <!-- end comments -->

            <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

 </section>




@endsection --}}
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

<div class="banner-1" style="background-image: url('{{ $post->featured }}')">

</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="agileinfo">

          <h2 class="w3">{{ $post->title }}</h2>
          <p style="font-family: Consolas;"> {{ $post->created_at->format('D, d-M-Y') }} </p>
			<div class="single">
			   <img src="{{ $post->featured }}" class="img-responsive" alt="">
			    <div class="b-bottom"> 
                  <h5 class="top">{{ $post->category->name }}</h5>
				   <p class="sub">{{ $post->content }}</p>
                    <p>
                        @foreach($post->tags as $tag)
                            <a class="span_link" href="{{ route('tag.single', ['id' => $tag->id ]) }}">
                                   #{{ $tag->tag }}                       
                            </a>    
                        @endforeach 
                        
                    </p>
				</div>
             </div>
             
				<div class="coment-form">
					<h4>Leave your comment</h4>
					@include('includes.disqus')
				</div>	
				<div class="clearfix"></div>
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