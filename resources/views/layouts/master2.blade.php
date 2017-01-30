<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style type="text/css">
    .cf-hidden {
        display: none;
    }
    
    .cf-invisible {
        visibility: hidden;
    }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Zandanshatar.mn</title>

    <script data-cfasync="false" src="/js/jquery.min.js.download"></script>

@include('layouts.partials.meta')
@yield('css')

        <link rel="stylesheet" id="screen-css" href="/css/style.min.css" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="/css/sweetalert.css">

</head>

<body class="page-template-default page page-id-414 geocontent-initialized ">
@include('layouts.partials.nav')
@yield('content')
    
@include('layouts.partials.footer')
    

    <script src="/js/picturefill.min.js"></script>
    <script src="/js/main.min.js" ></script>
    <script src="/js/sweetalert.min.js"></script>
@include('layouts.flash')

</body>

</html>