@extends('layouts.master4')

@section('content')

    <section id="content" role="main" class="no-max">

        <article class="post-20721 post type-post status-publish format-standard has-post-thumbnail hentry category-layout2 category-press-release" id="post-20721">
            <header>
            <h1>Хэвлэлийн мэдээ
            </h1>
            <h2>{{$article->title}}</h2>
            <time datetime="2017-01-08">{{$article->created_at}}</time>
            <div class="menu-social">
            <ul>
                            <li class="icon icn-twitter"><a href="https://twitter.com/home?status=http://zandanshatar.mn/books/{{$article->id}}" target="_blank">Twitter</a></li>
                            <li class="icon icn-facebook"><a target="_blank" href="https://www.facebook.com/share.php?u=http://zandanshatar.mn/books/{{$article->id}}">Facebook</a></li>
            </ul>
            </div>
            </header>
            <div style="clear: both;"></div>
{!!$article->body!!}

            <div style="clear: both;"></div>
        </article>
    </section>

@endsection
