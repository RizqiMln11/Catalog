<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{$title}} - {{$setting->site_name}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="author" content="Intprism Technology, info@intprism.com">
	<meta name="keywords" content="{{$title}}" />
	<meta name="description" content="Kami memproduksi dekorasi ruang berupa Neon Flex Sign {{$title}} yang ditujukan untuk meningkatkan branding suatu toko atau usaha.">
	<link rel="shortcut icon" href="{{asset('newcatalog/images/logo.png')}}" type="image/x-icon">
	<meta property="og:image" content="{{asset('newcatalog/images/logo.png')}}" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{ asset('newcatalog/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/style6.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ asset('newcatalog/css/shop.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('newcatalog/css/owl.carousel.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('newcatalog/css/owl.theme.css')}}" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="{{ asset('newcatalog/css/jquery-ui1.css')}}">
	<link href="{{ asset('newcatalog/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ asset('newcatalog/css/flexslider.css')}}" type="text/css" media="screen" />
	<link href="{{ asset('newcatalog/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		@include('includes.header2')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="/">Home</a>
							<i>|</i>
						</li>
						<li>Tags: {{ $title }} </li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
                    <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Catalog dengan Tags : #{{$title}}</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
                                @foreach($tag->posts as $postfive)
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{asset($postfive->featured) ?? asset('newcatalog/images/logo.png')}}" class="img-fluid" style="height: 210px !important;">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('post.single', ['slug' => $postfive->slug]) }}" class="link-product-add-cart">Lihat Detail</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href={{ route('post.single', ['slug' => $postfive->slug]) }}">{{$postfive->title}} </a>
																</h4>
																<div class="grid-price mt-2">
																	@php
																		$pricing = $newpstPrice::where('posts_id', $postfive->id)->first();
																		$pricing = $newprices::where('id', $pricing->prices_id)->first();
																	@endphp
																	<span class="money ">{{ "Rp " . number_format((float)$pricing->harga_diskon,2,',','.')}}</span>
																</div>
															</div>
															<ul class="stars">
																@php
																	$star = rand(3,5);
																@endphp
																@for($i = 0; $i < $star; $i++)
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																@endfor
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<a href="catalog/{{$postfive->slug}}"><i class="fas fa-cart-plus" style="margin-top: 1em;font-size: 14pt;"></i></a>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
		<!--footer -->
		@include('includes.footer2')
		<!-- //footer -->

		<!--jQuery-->
		<script src="{{ asset('newcatalog/js/jquery-2.2.3.min.js')}}"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="{{ asset('newcatalog/js/modernizr-2.6.2.min.js')}}"></script>
		<script src="{{ asset('newcatalog/js/classie-search.js')}}"></script>
		<script src="{{ asset('newcatalog/js/demo1-search.js')}}"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="{{ asset('newcatalog/js/minicart.js')}}"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="{{ asset('newcatalog/js/jquery-ui.js')}}"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="{{ asset('newcatalog/js/owl.carousel.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->

		<!-- single -->
		<script src="{{ asset('newcatalog/js/imagezoom.js')}}"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="{{ asset('newcatalog/js/easy-responsive-tabs.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="{{ asset('newcatalog/js/jquery.flexslider.js')}}"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
	<script src="{{ asset('newcatalog/js/move-top.js')}}"></script>
    <script src="{{ asset('newcatalog/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


		<script src="{{ asset('newcatalog/js/bootstrap.js')}}"></script>
		<!-- js file -->
</body>

</html>