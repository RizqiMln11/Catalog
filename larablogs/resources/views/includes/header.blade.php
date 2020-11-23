{{-- <header class="s-header header">
        <div class="header__logo">
            <a class="logo" href="index.html">
                <img src="{{ asset('images/free.png') }}" alt="Homepage" style="height: 100%;, width: 100%;" >
            </a>
        </div> <!-- end header__logo -->

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="/results">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="query" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div>  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>

            <ul class="header__nav">
                <li class="current"><a href="http://127.0.0.1:8000" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                        
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category.single', ['id' => $category->id ]) }}"> {{ $category->name }} </a>
                            </li>
                         @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('about') }}" title="">About</a></li>
                <li><a href="{{ route('contact') }}" title="">Contact</a></li>
                
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

        </nav> <!-- end header__nav-wrap -->
</header> --}}

<div class="header" id="ban">
		<div class="container">
			<nav style="margin-left: 21%" class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7" style="margin-left: 50px">
						<ul class="nav navbar-nav">
                            <li><a href="{{ route('index') }}">Halaman Utama</a></li>
                            <li><a href="#" data-toggle="popover" data-placement="bottom"  data-html="true" title="Kategory" 
                                data-content=" @foreach($categories as $category)  <a href='{{ route('category.single', ['id' => $category->id ]) }}'> •{{ $category->name }}</a> @endforeach ">
                            Kategory Post</a></li>
							<li><a href="{{ route('about') }}">Tentang Kami</a></li>
							<li><a href="{{ route('contact') }}">Kontak</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="clearfix"> </div>	
		</div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
    </script>
	<!--start-main-->

