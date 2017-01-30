@extends('layouts.master2')

@section('content')
    
    <div id="marquee" class="marquee" role="main">
        <div class="module-wrapper overlay">
            <section class="join module">
                <h2>Асуулт асуух</h2>
                <!-- <p class="pitch">Таны утас болон имэйлд миний хийж буй ажлын товч танилцуулга очих ба таны саналыг хүлээж авах боломжтой тул <strong> та бүхэнд туслахад минь надад туслан</strong> энэхүү веб хуудсанд нэгдэнэ үү. Баярлалаа</p> -->
                <hr>
                @include('layouts.partials.contactForm')
            </section>
        </div>
        <script data-cfasync="false">
        @if(isset($banner))
        smimage = "/assets/banners/{{$banner->photo}}";
        lgimage = "/assets/banners/{{$banner->photo}}";
        @else
        smimage = "/assets/secondary-bg-lg.jpg";
        lgimage = "/assets/secondary-bg-lg.jpg";
        @endif
        </script>
    </div>
    </div>

@endsection