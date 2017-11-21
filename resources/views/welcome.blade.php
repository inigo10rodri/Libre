<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BasketLife</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <a href="{{ url('/') }}"> BasketLife</a>
                <a href="nosotros">Sobre Nosotros</a>
                <a href="contenido">Contenido</a>

            </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                <img src="css/foto.jpg" id="imagen">
                <div class="content">
                    @auth
                        <div class="title m-b-md">
                            BasketLife
                        </div>
                        <div class="links ">
                            <p>Ya estas logueado y puedes acceder a todo nuestro contenido!</p>
                        </div>
                    @else
                        <div class="title m-b-md">
                            BasketLive
                        </div>
                        <div class="links ">
                            <p><u><a href="{{ route('register') }}">Registrate</a></u> y podras acceder a todo nuestro contenido!</p>
                        </div>
                    @endauth
                </div>

            @endif
        </div>
    </body>
    <footer>
        <div class="footer">
            <div class="row">
                <div class= "col-lg-12 col-md-12 mx-auto" >
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://github.com/inigo10rodri/Libre">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://facebook.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/watch?v=P93AdiCC_qI">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-youtube-square fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</html>
