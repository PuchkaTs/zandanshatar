@extends('layouts.master3')
@section('meta')
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@zandanshatar" />
    <meta name="twitter:creator" content="@zandanshatar" />
    
    @if(isset($article))
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:type" content="Занданшатар гишүүний сайт" />
    <meta property="og:description" content="{{ $article->shorten(300) }}" />
    <meta property="og:image" content="/assets/issues/facebook.jpg" />
    @endif
    
@stop
@section('content')

    <section id="content" role="main" class="no-max">
        <style>
        article>header {
            background-image: url('/assets/articles/{{$article->photo}}')
        }
        </style>
        <article class="post-20721 post type-post status-publish format-standard has-post-thumbnail hentry category-layout2 category-press-release" id="post-20721">
            <header>
                <div class="max-width">
                    <h1>Зорьж буй ажил</h1>
                    <h2>{{$article->title}}</h2>
                    <!-- <time datetime="2016-08-03">{{$article->created_at}}</time> -->
                    <div class="menu-social">
                        <ul>
                            <li class="icon icn-twitter"><a href="https://twitter.com/home?status=http://zandanshatar.mn/issues/{{$article->id}}" target="_blank">Twitter</a></li>
                            <li class="icon icn-facebook"><a target="_blank" href="https://www.facebook.com/share.php?u=http://zandanshatar.mn/issues/{{$article->id}}">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <div style="clear: both;"></div>
{!!$article->body!!}

            <div style="clear: both;"></div>
        </article>
    </section>

@endsection
