@extends('layouts.master2')

@section('content')
<section id="content" role="main">
<header class="archive-title">
<h1>Мэдээ мэдээлэл</h1>
</header>
@foreach($articles as $article)
<article class="post-20931 pr type-pr status-publish hentry category-press-release" id="" style="margin-bottom:3em;">
<header>
<h1>Хэвлэлийн мэдээ</h1>
<h2>
{!! link_to_route('news_show_path', $article->title, $article->id, []) !!}
</h2>
<time>{{$article->created_at}}</time>
<div class="menu-social">
<ul>
<li class="icon icn-twitter"><a href="https://twitter.com/home?status=http://zandanshatar.mn/news/{{$article->id}}" target="_blank">Twitter</a></li>
<li class="icon icn-facebook"><a target="_blank" href="http://facebook.com/share.php?u=http://zandanshatar.mn/news/{{$article->id}}">Facebook</a></li>
</ul>
</div>
</header>
<div style="clear: both;"></div>
<p>
{{$article->shorten(400)}}
{!! link_to_route('news_show_path', 'Дэлгэрэнгүй ', $article->id, ['class' => 'more']) !!}
</p>
</article>
@endforeach

<nav class="pagination">

                                <div class="textcenter">
                                {!! $articles->links() !!}                                
                                </div>  
</nav>
<div style="clear: both;"></div>
        <script data-cfasync="false">
        @if(isset($banner))
        smimage = "/assets/banners/{{$banner->photo}}";
        lgimage = "/assets/banners/{{$banner->photo}}";
        @else
        smimage = "/assets/secondary-bg-lg.jpg";
        lgimage = "/assets/secondary-bg-lg.jpg";
        @endif
        </script>
</section>

@endsection
