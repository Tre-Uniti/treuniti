<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('siteTitle')</title>
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
        <nav class = "topNav">
            <ul>
                <li class = "navDesktopIcon"><a href={{ url('/home') }}><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class = "navMobileIcon">
                    <a href = "{{ url('/home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                <li>

                <li class = "navMobileIcon">
                    <p onclick="" class = "nav"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/posts/create') }}>Create</a></li>
                            <li><a href={{ url('/posts') }}>Discover</a></li>
                            <li><a href="{{ url('/drafts') }}">Drafts</a></li>
                            <li><a href={{ url('/legacyPosts')}}>Legacies</a></li>
                            <li><a href="{{ url('/extensions') }}">Extensions</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navDesktopIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-users" aria-hidden="true"></i></p>
                    <div>
                        <ul>
                            <li><a href="{{ url('/users') }}">Users</a></li>
                            <li><a href="{{ url('/beacons') }}">Beacons</a></li>
                            <li><a href="{{ url('/sponsors') }}">Sponsors</a></li>
                            <li><a href="{{ url('/beliefs') }}">Beliefs</a></li>
                            <li><a href="{{ url('/questions') }}">Questions</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navMobileIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-users" aria-hidden="true"></i> <span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href="{{ url('/users') }}">Users</a></li>
                            <li><a href="{{ url('/beacons') }}">Beacons</a></li>
                            <li><a href="{{ url('/sponsors') }}">Sponsors</a></li>
                            <li><a href="{{ url('/beliefs') }}">Beliefs</a></li>
                            <li><a href="{{ url('/questions') }}">Questions</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <article>
            <div id = "centerContent">
                @yield('centerContent')
            </div>
        </article>
        <div id = "centerFooter">
            @yield('centerFooter')
        </div>
    </div>
</body>
</html>