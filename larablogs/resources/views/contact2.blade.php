<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Contact Us - {{$setting->site_name}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="author" content="Intprism Technology, info@intprism.com">
	<meta name="keywords" content="{{$setting->site_name}} contact us" />
	<meta name="description" content="Perluinfo lanjut mengenai layanan kami, silahkan hubungi kami melalui form halaman ini.">
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
	<link href="newcatalog/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="newcatalog/css/shop.css" type="text/css" />
	<link href="newcatalog/css/contact.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/style.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		@include('includes.header2')
        <!-- banner -->
		<div class="banner_inner" style="background: url('<?php $bingImage = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US');$bingImage = json_decode($bingImage, true); echo "https://www.bing.com/".$bingImage['images'][0]['url']; ?>')no-repeat 0px -73px !important;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="/">Home</a>
							<i>|</i>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Address</h6>
								<p> {{$setting->address}}

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>
									<a href="mailto:{{$setting->contact_email}}"> {{$setting->contact_email}}</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>{{$setting->contact_number}}</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<!-- <form action="#" method="post"> -->
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" id="name" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" id="email" type="email" name="Email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">Subject</label>
									<input class="form-control" id="subject" type="text" name="Subject" placeholder="" required="">
								</div>
								<input class="form-control" id="nomor" type="text" name="Subject" value="{{$setting->contact_number}}" required="" hidden>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" placeholder="" required=""></textarea>
								</div>
								<button class="form-control" id="contactWa">Submit</button>

							</div>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.0553041237977!2d111.98965131478008!3d-8.0958429941715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zOMKwMDUnNDUuMCJTIDExMcKwNTknMzAuNiJF!5e0!3m2!1sid!2sid!4v1606306668499!5m2!1sid!2sid"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>

	<!--footer -->
	@include('includes.footer2')
	<!-- //footer -->

	<!--jQuery-->
	<script src="newcatalog/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="newcatalog/js/modernizr-2.6.2.min.js"></script>
	<script src="newcatalog/js/classie-search.js"></script>
	<script src="newcatalog/js/demo1-search.js"></script>
	<!--//search jQuery-->
	
	<script>
		$(document).ready(function () {
			$("#contactWa").click(function (e) { 
				var number = $('#nomor').val();
				var nama = "Nama: " + $("#name").val();
				var email = "\nEmail: " + $("#email").val();
				var subject = "\nSubject: " + $('#subject').val();
				var message = "\nMessage " + $('#message').val();
				var messages = nama + email + subject + message;
				// number.replaceAt(0, '')
				number = number.replace('+','');
				var ini = 'https://api.whatsapp.com/send?phone=' 
						+ number 
						+ '&text=' 
						+ encodeURIComponent(messages)
				window.open(ini, '_blank')
			});
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
	<!-- cart-js -->
	<script src="newcatalog/js/minicart.js"></script>
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
	<script src="newcatalog/js/move-top.js"></script>
    <script src="newcatalog/js/easing.js"></script>
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


	<script src="newcatalog/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>