<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Yuuki Takezawa">
    <meta name="description" content="laravelチュートリアル, laravelリファレンス, laravel使い方, laravel 日本語">
    <meta name="keywords" content="lumen, laravel, php, framework, web">
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="/css/application.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/layout.css">
    <title>@yield('title', 'Learning Laravel(JP)')</title>
</head>
<body>
@include('elements.nav')
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
    @yield('content')
        @include('elements.sidebar')
    </div><!--/row-->
    <hr />
    @include('elements.footer')
</div><!--/.container-->
<script src="/js/jquery/jquery.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script src="/js/bootflat/icheck.min.js"></script>
<script src="/js/bootflat/jquery.fs.selecter.min.js"></script>
<script src="/js/bootflat/jquery.fs.stepper.min.js"></script>
</body>
</html>
