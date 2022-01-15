<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J8NLMWS1BW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J8NLMWS1BW');
</script>

</head>
<body>
    <div id="app">
                

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
 
        <a class="navbar-brand " href="/">山梨百名山を通じて世界と繋がるサイト</a>
    
        <ul class="navbar-nav margin-right: auto">　
            <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./mountain">百名山一覧</a></li>
            <li class="nav-item"><a class="nav-link" href="#">登頂数ランキング(まだ作成中)</a></li>
        
            <li class="nav-item">
                <a class="nav-link" href="#">About(まだないです)</a>
            </li>
    
            <li class="nav-item">
            @auth
                <img src="{{ Auth::user()->avatar }}" width="48" height="48">
                <a class="navbar-brand" href="./profile">profile</a>
                <a class="navbar-brand" href="./register">登った山の登録</a>
                <a class="navbar-brand" href="./auth/twitter/logout">logout</a>
                
            @else
                <img src="{{ asset('/image/twitter.png') }}" width="48" height="48" alt="twitter image" title="twitter image">
                <a class="navbar-brand" href="./auth/twitter">twitter login</a>
            @endif
            </li>    
        </ul>
    
    </div>    
    </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
