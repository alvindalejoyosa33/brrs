<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/images/app-icon.jpg">
        <title>Sanaol Shopping</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/landingpage.css">
    </head>
    <body class="antialiased">

        <div class="landing-banner">
            <div class="banner-left">
                <h1>
                    Welcome to <br>
                    Sanaol Shopping
                </h1>
            </div>
            <div class="banner-right">

                @livewire('login')

            </div>
        </div>

    </body>
</html>
