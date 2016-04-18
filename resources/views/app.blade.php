<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tre-Uniti /-\ @yield('siteTitle')</title>
    <link rel = "stylesheet" href = "/css/normalize.css">
    <link rel = "stylesheet" href = "{{ elixir('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content= "{{ Request::url() }}"/>
    <meta property="og:type"          content="website"/>
    <meta property="og:title"         content="Tre-Uniti"/>
    <meta property="og:description"   content="Be inspired through community."/>
    <meta property="og:image"         content="https://tre-uniti.org/img/tre-uniti.png"/>
@yield('pageHeader')
        <!--
       This code is maintained by the Tre-Uniti development ops
       Feature & Pull Requests decided at Belle-Creatori.org
       Idee Repo: https://github.com/tre-uniti/tre-uniti
    -->
</head>
<body>
<div id = "container">
    <div id = "centerContent">
        <article>
            <div id = "centerMenu">
                <header>
                    @include('partials.flash')
                    @yield('centerMenu')
                </header>
            </div>
            <div id = "centerText">
                @yield('centerText')
            </div>
        </article>
        <div id = "centerFooter">
            @yield('centerFooter')
        </div>
    </div>
</div>
</body>
</html>