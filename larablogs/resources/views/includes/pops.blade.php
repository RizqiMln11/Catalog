<div class="blo-top1">

    <div class="tech-btm">
        <div class="search-1 wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
            <form action="#" method="post">
                <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <h4>Di Sarankan untuk Anda.. </h4>
        @foreach ($sixthpost as $six)
        <div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="blog-grid-left">
                <a href="{{ route('post.single', ['slug' => $six->slug]) }}"><img src="{{ $six->featured }}" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">

                <h5><a href="{{ route('post.single', ['slug' => $six->slug]) }}">{{ $six->title }}</a> </h5>
            </div>
            <div class="clearfix"> </div>
        </div>
        @endforeach

        <p>Berita Seputar Jatim Terpercaya</p>
        <div class="twt">

            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag"
                style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
            <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');
            </script>
        </div>
    </div>



</div>