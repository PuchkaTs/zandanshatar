@extends('layouts.contactmaster')

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
        smimage = "https://berniesanders.com/wp-content/uploads/2015/05/homepage-mosaic-sm.jpg";
        lgimage = "https://berniesanders.com/wp-content/uploads/2015/05/homepage-mosaic-lg.jpg";
        </script>
    </div>
    </div>

@endsection