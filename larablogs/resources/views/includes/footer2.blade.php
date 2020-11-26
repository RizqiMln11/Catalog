<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Kami memproduksi dekorasi ruang berupa Neon Flex Sign yang ditujukan untuk meningkatkan branding suatu toko atau usaha.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">
							<li class="mx-2">
								<a href="https://instagram.com/ermneonflex">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="mailto:{{ $setting->contact_email }}">
									<span class="fas fa-envelope"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>{{ $setting->address }}</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : {{ $setting->contact_number }}</p>
							<p>Email :
								<a href="mailto:{{ $setting->contact_email }}">{{ $setting->contact_email }}</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Suport By:</h3>
					</div>
					<ul class="links">
						<li>
							<p>~ Inkubator Bisnis PPNS</p>
							<img src="{{asset('newcatalog/images/logo2.png')}}" style="height: 5em;background-color: darkgrey;">
						</li>
						<hr>
						<li>
							<p>~ Kemendikbud RI</p>
							<img src="{{asset('newcatalog/images/kemendikbud.png')}}" style="height: 5em;">
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Subscribe for your offers</h3>
					</div>
					<div class="footer-text">
						<p>Masukan Email anda, Masih banyak Catalog menarik lainnya! Ikuti kami dengan subscribe Email di bawah ini!</p>
						<form action="{{ url('subscribe') }}" method="POST">
							{{ csrf_field() }}
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1" type="submit">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; <a href="/"><?php echo date("Y");?> {{$setting->site_name}}</a>. All Rights Reserved
					<!-- Developer Company -->
					<a href="https://bikinkode.com/" style="display:none;"> Develop By: Bikin Kode Indonesia </a>
					<a href="https://intprism.com/" style="display:none;"> Develop By: Intprism Technology </a>
					<!-- END Developer Company -->
				</p>
			</div>
		</div>
	</footer>