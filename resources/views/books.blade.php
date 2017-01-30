@extends('layouts.master2')
@section('css')
<style type="text/css">
	body{
		background-color: #edf0f7;
	}
</style>
@stop
@section('content')
<div class="archive category" style="background-color: #edf0f7;">
<section id="content" role="main">
<header class="archive-title">
<h1>Номнууд</h1>
</header>
<section id="" role="main">
@foreach($articles as $article)
	<article class="post-21076 post type-post status-publish format-standard has-post-thumbnail hentry category-daily" id="">
	<img src="/assets/books/{{$article->photo}}"> <header>
	<h1>
	</h1>
	<h2>
{!! link_to_route('talks_show_path', $article->title, $article->id, []) !!}
	</h2>
	<div class="meta-group">
	<time>{{$article->created_at}}</time>
	</div>
	</header>
	<div style="clear: both;"></div>
	<div class="excerpt" style="padding: 0 1rem;
    font-size: 1.05rem;
    line-height: 1.5;    font-weight: 300;">
{{$article->shorten(200)}}
	</div>
	<p>
{!! link_to_route('books_show_path', 'Унших ', $article->id, ['class' => 'more']) !!}
		
	</p>
	</article>
@endforeach
</section>
</div>

<nav class="pagination" style="background-color: #edf0f7;">

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
