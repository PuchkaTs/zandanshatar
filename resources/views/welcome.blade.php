@extends('layouts.master')

@section('content')
    
    <div id="marquee" class="marquee" role="main">
        <div class="module-wrapper overlay">
            <section class="join module">
                <h2>Та бүхэн миний вэбсайтанд нэгдсэнээр</h2>
                <p class="pitch">Та бүхний санал бодлыг сонсох, хэрэгжүүлж буй ажлынхаа талаар тайлагнахад минь тусалж энэхүү вэб хуудсанд нэгдэнэ үү. Баярлалаа</p>
                <hr>
                @include('layouts.partials.form')
            </section>
        </div>
        <script data-cfasync="false">
        smimage = "https://berniesanders.com/wp-content/uploads/2015/05/homepage-mosaic-sm.jpg";
        lgimage = "https://berniesanders.com/wp-content/uploads/2015/05/homepage-mosaic-lg.jpg";
        </script>
    </div>
    </div>

    <section class="action-center">
        <header>
            <!-- <h1 class="dek">Organize</h1> -->
            <h2>Өнөөгийн улс төрийг шинэчлэхэд таны оролцоо</h2>
        </header>
        <ul class="action-center-items">
            <li id="post-406" class="action-item">
                <a href="/">
                    <h4>Уулзалтанд </h4>
                    <h3>Оролцох</h3>
                </a>
            </li>
            <li id="post-407" class="action-item">
                <a href="/posters">
                    <h4>Найзууддаа</h4>
                    <h3>Түгээх</h3>
                </a>
            </li>
            <li id="post-405" class="action-item">
                <a href="/ask">
                    <h4>Асуулт</h4>
                    <h3>Асуух</h3>
                </a>
            </li>
        </ul>
        <aside><a class="action" href="/issues">Зорьж буй ажлууд</a></aside>
    </section>

    <div class="module-wrapper">
        <section class="social module">
            <h2>Занданшатар гишүүнийг дагах</h2>
            <hr>
            <nav>
                <ul id="menu-homepage-social-media" class="menu">
                    <li id="menu-item-810" class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-810"><a target="_blank" href="https://www.facebook.com/G.Zandanshatar"></a></li>
                    <li id="menu-item-815" class="twitter menu-item menu-item-type-custom menu-item-object-custom menu-item-815"><a target="_blank" href="https://www.twitter.com/Zandanshatar"></a></li>
                    <li id="menu-item-816" class="youtube menu-item menu-item-type-custom menu-item-object-custom menu-item-816"><a target="_blank" href="https://www.youtube.com/channel/UCjvmG7Gzzn3rnUokTtPTDww"></a></li>
                    <li id="menu-item-877" class="wiki menu-item menu-item-type-custom menu-item-object-custom menu-item-877"><a target="_blank" href="https://mn.wikipedia.org/wiki/%D0%93%D0%BE%D0%BC%D0%B1%D0%BE%D0%B6%D0%B0%D0%B2%D1%8B%D0%BD_%D0%97%D0%B0%D0%BD%D0%B4%D0%B0%D0%BD%D1%88%D0%B0%D1%82%D0%B0%D1%80"></a></li>
                </ul>
            </nav>
        </section>
    </div>

    @include('layouts.partials.timeline')

    <div class="module-wrapper">
        <section class="social module">
            <h2>Занданшатар гишүүнтэй холбогдох</h2>
            <hr>
            <nav>
                <ul id="menu-homepage-social-media" class="menu">
                    <li id="menu-item-810" class="phone menu-item menu-item-type-custom menu-item-object-custom menu-item-810"><a target="_blank" href="#"><p>51-263154</p></a></li>
                    <li id="menu-item-815" class="sms menu-item menu-item-type-custom menu-item-object-custom menu-item-815"><a target="_blank" href="#"><p>8595-9580</p></a></li>
                    <li id="menu-item-816" class="mail menu-item menu-item-type-custom menu-item-object-custom menu-item-816"><a target="_blank" href="#"><p>Contact@zandanshatar.com</p></a></li>
                </ul>
            </nav>
        </section>
    </div>
    @if($article)
    <div class="section-offset">
        <section class="featured-posts">
            <header>
                <!-- <h1>Хэвлэлийн мэдээ</h1> -->
            </header>
            <article class="clearfix post-20582 post type-post status-publish format-standard hentry category-uncategorized" id="post-20582">
                <header>
                    <h2><a href="{{route('news_show_path', $article->id)}}" rel="bookmark" >{{$article->title}}</a></h2>
                </header>
                <p>{{$article->shorten(400)}}</p>
            </article>
            <aside>{!! link_to_route('news_show_path', 'Дэлгэрэнгүй ', $article->id, ['class' => 'action']) !!}</aside>
        </section>
    </div>
    @endif

    @include('layouts.partials.negdeh')

@endsection