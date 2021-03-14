<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
                    Payments From
                </div>

                <div class="links">
                    <a href="https://www.neteller.com/en/features/security?btag=a_94953b_2560c_&program=NTAFFILIATE">Neteller</a>
                    <a href="https://www.skrill.com/en/?btag=a_83282b_3896c_Bangladesh&program=SKRILL&gclid=EAIaIQobChMIrZaV6oOt7wIVH4ZLBR1FfQyNEAAYASAAEgK7vPD_BwE">Skrill</a>
                    <a href="https://phemex.com/lp-crypto-platform?group=722&referralCode=DPXAJ&gclid=EAIaIQobChMI_LnFg4St7wIVhdGWCh0wTwbuEAAYAiAAEgLArPD_BwE">Bitcoin</a>
                    <a href="https://perfectmoney.com/?welcome=1">Perfect Money</a>
                    <a href="https://www.mastercard.us/en-us.html">Mastercard</a>
                </div>
            </div>
        </div>
    </body>
</html>
