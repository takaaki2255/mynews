<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!-- windowsの基本ブラウザであるedgeに対応するという記載。 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- 画面幅を小さくしたとき、たとえばスマートフォンで見たときなどに文字や画像の大きさを調整してくれるタグです。 -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- yieldは指定したセッションの内容を表示するために使用します。 -->
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        <!-- secure_assetファイルパスは、publicディレクトリのパスを返す関数のことです。 -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    </head>
    <body>
     <div id="app">
         <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
             <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     <!-- これもsecure_assetと似たような関数で、configフォルダのapp.phpの中にあるnameにアクセスをします。
                            基本的にはアプリケーションの名前「Laravel」が格納されています。 -->
                     {{ config('app.name', 'Laravel') }}
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 
                 <div class="collapse navbar-collapse" id=="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav ms-auto">
                          
                      </ul>
                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav">
                      </ul>
                 </div>
             </div>
         </nav>
         
         <main class="py-4">
             @yield('content')
         </main>
     </div>
    </body>
</html>