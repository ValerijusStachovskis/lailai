<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="background-color: black; color: white;">
            @if (Route::has('login'))
                <div class="top-right links" style="background-color: black; color: white;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Arena pizza
                </div>

                <div class="links">
                    <div>
                        <h1>Pirma midi</h1>
                        <div style="background-color: black; color: white;">Campino    {{ $pirma_mini->get(0)->campino }}</div>
                        <div style="background-color: black; color: white;">Suris      {{ $pirma_mini->get(0)->suris }}</div>
                        <div style="background-color: black; color: white;">Kumpis     {{ $pirma_mini->get(0)->kumpis }}</div>
                        <div style="background-color: black; color: white;">Jelopenas  {{ $pirma_mini->get(0)->jelopenas }}</div>
                        <div style="background-color: black; color: white;">Salsa      {{ $pirma_mini->get(0)->salsa }}</div>
                        <div style="background-color: black; color: white;">Cesnakinis {{ $pirma_mini->get(0)->cesnakinis }}</div>
                    </div>

                    <div>
                        <h1>Pirma maxi</h1>
                        <div style="background-color: black; color: white;">Campino    {{ $pirma_maxi->get(0)->campino }}</div>
                        <div style="background-color: black; color: white;">Suris      {{ $pirma_maxi->get(0)->suris }}</div>
                        <div style="background-color: black; color: white;">Kumpis     {{ $pirma_maxi->get(0)->kumpis }}</div>
                        <div style="background-color: black; color: white;">Jelopenas  {{ $pirma_maxi->get(0)->jelopenas }}</div>
                        <div style="background-color: black; color: white;">Salsa      {{ $pirma_maxi->get(0)->salsa }}</div>
                        <div style="background-color: black; color: white;">Cesnakinis {{ $pirma_maxi->get(0)->cesnakinis }}</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
