<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="description" content="Tre-Uniti - We provide web apps for communities and individuals to inspire, develop, and learn cooperatively..">

    <title>@yield('siteTitle')</title>
    <link rel = "stylesheet" href = "/css/normalize.css">
    <link rel = "stylesheet" href = "{{ elixir('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/9747c67e36.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>

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
                <li class = "navDesktopIcon"><a href={{ url('/') }}><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li class = "navMobileIcon">
                    <a href = "{{ url('/') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                <li>
                <li class = "navDesktopIcon">
                    <p onclick="" class = "nav"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Idee<span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href="{{ url('https://belle-idee.org/about') }}" target = "_blank">About</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navMobileIcon">
                    <p onclick="" class = "nav"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/') }}>About</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navDesktopIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Creatori<span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/') }}>About</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navMobileIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/') }}>About</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navDesktopIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Studenti<span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/') }}>About</a></li>
                        </ul>
                    </div>
                </li>
                <li class = "navMobileIcon">
                    <p onclick="" class = "nav"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span class="caret"></span></p>
                    <div>
                        <ul>
                            <li><a href={{ url('/') }}>About</a></li>
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