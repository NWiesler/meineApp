<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>What's in my fridge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!--Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-image: url('https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80');
                background-size:cover;*/
                background-color: #fff;
                color: #58BAC2;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
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
                color: #58BAC2;
                padding: 0 25px;
                font-size: 18px;
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
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    What's in my fridge?
                </div>

            @if (Route::has('login'))
            
                    @auth
                    <a type="button" class="btn btn-outline-info" href="{{ url('/products') }}">  </a>
                    
                @else

                        @if (Route::has('register'))
                            <a type="button" class="btn btn-outline-info" href="{{ route('login') }}">Login </a>
                            <a type="button" class="btn btn-outline-info" href="{{ route('register') }}">Register</a>
                            <!--<a href="{{ route('register') }}"> Not a member yet? Register now!</a> -->
                        @endif

                    @endauth
                
            @endif
    
            </div>
        </div>
    </body>
</html>
