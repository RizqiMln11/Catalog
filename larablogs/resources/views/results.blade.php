    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">


@include('includes.header')



<section class="s-content s-content--top-padding">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Search Results: {{ $query }}</h1>
                <p class="lead">Tampilan Post Sesuai Pencarian.</p>
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
             @if($posts->count() > 0)
               @foreach($posts as $post)
                <article class="col-block">
                    
                      <div class="item-entry" data-aos="zoom-in">
                        
                        <div class="item-entry__thumb">
                             
                            <a href="single-standard.html" class="item-entry__thumb-link">
                                <img src="{{ $post->featured }}" 
                                        srcset="{{ $post->featured }} 2x" alt="">
                            </a>
                              

                        </div>
                        
        
                        <div class="item-entry__text">
    
                            <h1 class="item-entry__title"><a href="{{ route('post.single', ['slug' => $post->slug]) }}">{{ $post->title }}.</a></h1>
                                

                                <a href="{{ route('post.single', ['slug' => $post->slug]) }}"> {{ $post->created_at->toFormattedDateString() }}</a>

                        </div>
                      </div>
                  
                      <!-- item-entry -->

                </article>
                   @endforeach

                   @else
                            <h1 class="text-center">
                                No Results Found.
                            </h1>
                   @endif
            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section> 



    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-six tab-full s-footer__subscribe">
                        
                    <div class="subscribe-form">
                        <h4>Our Vision</h4>

                        <p>Menjadi Software House teknologi informasi yang mampu mendorong kemajuan industri telekomunikasi dan
                         pengembangan sumber daya manusia indonesia.</p>
                    </div>

                    <h4>About Us</h4>

                    <p>Saya Rizqi Mauana, Saya sekarang duduk di bangku Pelatihan Lab Akselerasi, Alumni SMAN 1 GEDEG angkatan
                         2017/2018, Saya jurusan ipa tapi saya lebih minat ke Dunia IT. harapan saya sukses di usia muda.</p>


                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Our Mission</h4>

                    <p>Sementara di Kosingi</p>

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

    </footer>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b59467ebacc609c"></script>