@extends('layouts.master2')

@section('content')

<section id="content" role="main">
<h1>Зорьж буй ажлууд</h1>
            @if(isset($banner))
                {!!$banner->body!!}
            @endif
	@foreach($issues as $issue)
	<h3>
		{!! link_to_route('issue_show_path', $issue->title, $issue->id, '') !!}
	</h3>
	@endforeach
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
