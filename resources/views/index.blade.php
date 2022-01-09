<!-- index.balde.php -->
<!doctype html>
<html lang="ja">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kobineko</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        
        <style>
            html,
            body {
                background-color: #fff;
                color: #636b6f;
                  font-family: "Helvetica Neue",
                                Arial,
                                "Hiragino Kaku Gothic ProN",
                                "Hiragino Sans",
                                Meiryo,
                                sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
 
        <a class="navbar-brand " href="/">山梨百名山を通じて世界と繋がるサイト</a>
    
        <ul class="navbar-nav margin-right: auto">　
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">百名山一覧</a></li>
            <li class="nav-item"><a class="nav-link" href="#">登頂数ランキング</a></li>
        
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
    
            <li class="nav-item">
            @auth
                <img src="{{ Auth::user()->avatar }}" width="48" height="48">
                <a class="navbar-brand" href="./auth/twitter/logout">logout</a>
            @else
                <img src="{{ asset('/image/twitter.png') }}" width="48" height="48" alt="twitter image" title="twitter image">
                <a class="navbar-brand" href="./auth/twitter">twitter login</a>
            @endif
            </li>    
        </ul>
    
    </div>    
    </nav>
    
   
    <div class="container">
        <div class="row">
            <main class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    未着手
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                テスト
                            </li>
                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                テスト
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>
</html>