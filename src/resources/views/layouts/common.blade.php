<DOCTYPE HTML>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>laravel学習用</title>
    </head>

    <body>
        @yield('header')
        <div class="contents">
            <div class="main">
                @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>

    </html>