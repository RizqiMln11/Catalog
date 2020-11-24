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

