<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('images/logo.webp') }}" type="image/x-icon">

        <title>{{ $title ?? 'Sana OL Shopping' }}</title>
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="/css/cart.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ asset('css/products.css') }}">
        <link rel="stylesheet" href="{{ asset('css/product-mobile.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
        <link rel="stylesheet" href="{{ asset('build/assets/app-ChIr4T-_.css') }}">
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        
        <div class="sidebar">
            <div class="site-title">
                <img src="/images/logo.webp" alt="Site Logo" width="55" height="55">
                <h4>Sana OL Shopping</h4>
            </div>
            <div class="divider"></div>
            <ul class="menu">
                @if(Auth::user()->user_role === 'customer')
                    <li><i class="fas fa-home"></i> &nbsp;&nbsp;<a href="{{ route('home') }}">Home</a></li>
                    <li><i class="fas fa-shopping-cart"></i> &nbsp;&nbsp;<a href="{{ route('cart') }}">Cart</a></li>
                    <li><i class="fas fa-shopping-bag"></i> &nbsp;&nbsp;Purchases</li>
                    <li><i class="fas fa-credit-card"></i> &nbsp;&nbsp;Billing</li>
                    <li><i class="fas fa-gears"></i> &nbsp;&nbsp;Settings</li>
                    <li>
                        <form class="logout" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="logout-btn" type="submit"><i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Logout</button>
                        </form>
                    </li>
                @else
                    <li><i class="fas fa-home"></i> &nbsp;&nbsp;<a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><i class="fa fa-shopping-basket"></i> &nbsp;&nbsp;<a href="{{ route('products') }}">Products</a></li>
                    <li><i class="fas fa-handshake"></i> &nbsp;&nbsp;<a href="{{ route('products') }}">Supplier</a></li>
                    <li>
                        <form class="logout" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="logout-btn" type="submit"><i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;Logout</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>

        <div class="main">
            <div class="main-content">
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
