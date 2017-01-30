@extends('layouts.master3')

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
                    <h1>Хэвлэлийн мэдээ</h1>
                    <h2>{{$article->title}}</h2>
                    <time datetime="2016-08-03">{{$article->created_at}}</time>
                    <div class="menu-social">
                        <ul>
                            <li class="icon icn-twitter"><a href="https://twitter.com/home?status=http://zandanshatar.mn/news/{{$article->id}}" target="_blank">Twitter</a></li>
                            <li class="icon icn-facebook"><a target="_blank" href="https://www.facebook.com/share.php?u=http://zandanshatar.mn/news/{{$article->id}}">Facebook</a></li>
                            
                        </ul>
                    </div>
                </div>
            </header>
            <div style="clear: both;"></div>
            <div class="article-body articleBody">
                @if(($article->video))
                <div class="embed-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$article->video}}" frameborder="0" allowfullscreen></iframe>
                </div>  
                @endif

                {!!$article->body!!}
            </div>

            <div style="clear: both;"></div>
        </article>
    </section>

@endsection
