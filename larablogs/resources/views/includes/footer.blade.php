    {{-- <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__subscribe">
                        
                    <div class="subscribe-form">
                        <h4>Our Vision</h4>

                        <p>{{ $profile->vision }}</p>
                    </div>

                    <h4>About Us</h4>

                    <p>{{ $profile->about }}</p>


                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Our Mission</h4>

                    <p>{{ $profile->mission }}</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/mass.jt" target="_blank"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=+6287860526291" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rizqimln11/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCeWEivdnoYX0YcNruKO1cog" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/mass.jt" target="_blank">Rizqi Maulana</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> --}}

    <div class="footer">
            <div class="container">
                <div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4>Tentang Kami</h4>
                    <p> {{ $profile->about }}.</p>
                    <img src="{{ $profile->avatar }}" class="img-responsive" alt="">
                        <div class="bht1">
                            <a href="{{ route('about') }}">Baca Sekarang..</a>
                        </div>
                </div>
                <div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                <h4>Visi & Misi</h4>
                <div class="mid-btm">
                    <p>{{ $profile->vision }}</p>
                    <a href="https://bikinkode.com">https://bikinkode.com/</a>
                </div>
                
                    <p>{{ $profile->mission }}</p>
                    <a href="https://bikinkode.com">https://bikinkode.com/</a>
            
                </div>
                <div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <h4>Berlangganan</h4>
                    <p>Subscribe di kolom Email, Maka anda tidak ketingglan berita terupdate Lainya</p>
                            <div class="name">
                            <form action="{{ url('subscribe') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="email" placeholder="Email Kamu.." required="">
                                    <input type="submit" value="Berlangganan Sekarang">
                                </form>
                            
                            </div>	
                            
                                <div class="clearfix"> </div>
                        
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="container">
                        <p>© 2016 Style Blog. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                    </div>
    </div>