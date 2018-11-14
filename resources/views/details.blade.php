<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Halia Tours</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Additional Details
                </div>

                <div class="links">
                    <a href="/tours">Tours & Activities</a>
                    <a href="/about">About us</a>
                    <a href="/lengths">Tour Lengths</a>
                    <a href="/guestbook">Guestbook</a>
                    <a href="/detail">Additional Details</a>
                    <a href="/contact">Contact Us</a>
                </div>
            </div>
        </div>
    </body>
</html>
