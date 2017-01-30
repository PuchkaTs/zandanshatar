@extends('layouts.master2')

@section('content')
    
    <section id="about" role="main" class="page-template-page-home">
        <header>
            <h1>Занданшатар</h1>
            <h2>Танилцуулга</h2>
        </header>
        <article class="post" id="post-414">
            @if(isset($banner))
                {!!$banner->body!!}
            @endif
            <aside id="interstitial" class="clearfix" style="display: none;">
                <p>Learn more about Bernie's life and career with an interactive timeline.</p>
                <div class="action-btn">
                    <span id="call-timeline" class="action" href="#timeline">View Timeline</span>
                </div>
            </aside>
            
    @include('layouts.partials.timeline')

            <div class="video-wrapper">
            </div>
        </article>
        <script data-cfasync="false">
        @if(isset($banner))
        smimage = "/assets/banners/{{$banner->photo}}";
        lgimage = "/assets/banners/{{$banner->photo}}";
        @else
        smimage = "/assets/secondary-bg-lg.jpg";
        lgimage = "/assets/secondary-bg-lg.jpg";
        lgimage = "/assets/secondary-bg-lg.jpg";
        @endif
        </script>
    </section>
    @include('layouts.partials.negdeh')

@endsection
