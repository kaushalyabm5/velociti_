<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
       

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
           
        @endif

        <style>

html, body {
        margin: 0;
        padding: 0;
        height: 100%; /* Ensure both html and body cover the full height of the viewport */
    }

            body{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #252525;
            background-image: url('/Bikelog/11.jpg');
            
            background-size: cover;
            background-position: center;
            }
            .f{
                color: black
            }

            .ah{
                color: white;
                margin-left: 20px;
                font-weight: bold;
                position: relative;
                right: 50px;
                background-color: transparent;
                padding-left: 30px;
                padding-right: 20px;
                padding-top: 15px;
                padding-bottom: 15px;
                align-items: center;
                text-align: center;
                border-radius: 5px;
                border: 2px solid white;

                
            }
            .ah:hover{
                background-color: white;
                color: black;
            }
            .h1{
                margin-right: 10px;
                padding-left: 33px;
                padding-right: 33px;
            }
            .log{
                position: absolute;
                right: 495px;
                top: 370px;
                
            }

            h1{
                font-size: 100px;
                color: white;
               
            }
            .h2{
                background-color: white;
                color: black;
            }
            .h2:hover{
                background-color: black;
                color: white;
                border: 2px solid black;
            }
            .login{
                background-color: black;
            }
            .hd{
                background-color: transparent;
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                top: 200px;
            }
        </style>
    </head>
    <body>
        <div class="f">
            
           
                
                    
                        <div class="f">
                            
                        </div>

                        <div class="log">
                        @if (Route::has('login'))
                            
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="ah"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="ah h1"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="ah h2"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            
                        @endif
                        </div>
                        <div class="hd">
                    
                    <h1>Velociti</h1>
                        </div>
    </body>
</html>
