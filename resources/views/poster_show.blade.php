@extends('layouts.master2')
@section('meta')
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@zandanshatar" />
    <meta name="twitter:creator" content="@zandanshatar" />
    
    @if(isset($poster))
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:title" content="{{ $poster->title }}" />
    <meta property="og:type" content="Занданшатар гишүүний сайт" />
    <meta property="og:description" content="{{ $poster->shorten(300) }}" />
    <meta property="og:image" content="/assets/posters/{{$poster->photo}}" />
    @endif
    
@stop

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/css">
a.bsd-shareButton-facebook{
    color: white;
    border-radius: 3px;
    text-transform: uppercase;
    width: 49%;
    font-weight: 600;
    padding: 13px;
    letter-spacing: 2px;
    text-align: center;
    box-sizing: border-box;
    background-color: #4a659f;
}
a.bsd-shareButton-twitter{
    color: white;
    border-radius: 3px;
    text-transform: uppercase;
    width: 49%;
    font-weight: 600;
    padding: 13px;
    letter-spacing: 2px;
    text-align: center;
    box-sizing: border-box;
    background-color: #7ac3d7;
}
.bsd-shareButtons-wrap a {
    float: left;
    font-style: normal !important;
    text-decoration: none;
    margin-right: 1%;
    font-size: 14px;
    color: #fff;
    padding: .6em 1em;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.bsd-shareButtons-wrap {
    clear: both;
    margin-bottom: .4em;
}
.bsd-shareButtons-wrap {
    font-family: 'freight-sans-pro' text-transform: uppercase;
    margin-top: 0.2em;
}
.poster-text{
    width: 99%;
    margin-top: 1em;
    margin-bottom: 2em;
}
.intro{
    margin-top: 1em;
    margin-bottom: 1em;
}
.poster-aside{
    margin-top: 1em;
    padding: 4em;
    padding-right: 7em;
    padding-left: 2em;
}
.aside-image{
    margin-bottom: 2em;
    width: 100%;
}
</style>
@endsection
@section('content')
<div class="content container" id="content">
    <div class="row">
        <div class="intro col-md-8" style="padding:4em;">
            <img src="/assets/posters/{{$poster->photo}}" style="width: 99%; margin-bottom: 1em;" alt="Ask your friends to join the campaign">
<div class="bsd-shareButtons-wrap">
    <a class="bsd-shareButton-facebook" href="http://facebook.com/share.php?u=http://zandanshatar.mn/posters/{{$poster->id}}" title="Share on Facebook" target="_blank" style="color:white"><span>Share on Facebook</span></a>
    <a class="bsd-shareButton-twitter" href="https://twitter.com/home?status=http://zandanshatar.mn/posters/{{$poster->id}}" title="Tweet this" target="_blank" style="color:white"><span>Tweet this</span></a></div>
            <div class="poster-text" style="margin-top:3em;">
                {!!$poster->body!!}
            </div>
            <div id="fb-root"></div>
        </div>
        <div class="col-md-4 poster-aside">
            @foreach($posters as $key => $poster)
                @if ($key >=5) @break; @endif

                <a href="{{ route('poster_show_path', $poster->id) }}"><img class="aside-image" src="/assets/posters/{{$poster->photo}}"></a>
            @endforeach()

        </div>
    </div> 
            <script data-cfasync="false">
        @if(isset($banner))
        smimage = "/assets/banners/{{$banner->photo}}";
        lgimage = "/assets/banners/{{$banner->photo}}";
        @else
        smimage = "/assets/secondary-bg-lg-01.jpg";
        lgimage = "/assets/secondary-bg-lg-01.jpg";
        @endif
        </script>   
</div>
@endsection
