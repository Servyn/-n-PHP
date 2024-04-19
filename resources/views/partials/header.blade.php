<!-- resources/views/layouts/header.blade.php -->

<head>
    <!-- Các thẻ meta và các liên kết khác -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<header class="header">
    <div class="container">
        <div class="header-container">
            <div class="header-logo">
                <img src="{{ asset('public/image/apple_logo.svg') }}" alt="" class="header-logo-image">
            </div>
            <div class="header-nav">
                <a href="#" class="header-nav-item">Product</a>
                <div class="header-subnav">
                    <div class="container header-subnav-container">
                        <div class="header-subnav-item">
                            <h4 class="header-subnav-title">iPhone 12 series</h4>
                            <ul class="header-subnav-list">
                                <li><a href="#">iPhone 12 mini</a></li>
                                <li><a href="#">iPhone 12</a></li>
                                <li><a href="#">iPhone 12 Pro</a></li>
                                <li><a href="#">iPhone 12 Pro max</a></li>
                            </ul>
                        </div>
                        <div class="header-subnav-item">
                            <h4 class="header-subnav-title">iPhone 13 series</h4>
                            <ul class="header-subnav-list">
                                <li><a href="#">iPhone 13 mini</a></li>
                                <li><a href="#">iPhone 13</a></li>
                                <li><a href="#">iPhone 13 Pro</a></li>
                                <li><a href="#">iPhone 13 Pro max</a></li>
                            </ul>
                        </div>
                        <div class="header-subnav-item">
                            <h4 class="header-subnav-title">iPhone 14 series</h4>
                            <ul class="header-subnav-list">
                                <li><a href="#">iPhone 14</a></li>
                                <li><a href="#">iPhone 14 Plus</a></li>
                                <li><a href="#">iPhone 14 Pro</a></li>
                                <li><a href="#">iPhone 14 Pro max</a></li>
                            </ul>
                        </div>
                        <div class="header-subnav-item">
                            <h4 class="header-subnav-title">iPhone 15 series</h4>
                            <ul class="header-subnav-list">
                                <li><a href="#">iPhone 15</a></li>
                                <li><a href="#">iPhone 15 Plus</a></li>
                                <li><a href="#">iPhone 15 Pro</a></li>
                                <li><a href="#">iPhone 15 Pro max</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" class="header-nav-item">Contact</a>
                <a href="#" class="header-nav-item">Support</a>
                <a href="#" class="header-nav-item">About</a>
            </div>
            <div class="header-auth">
                {{-- <a href="{{ route('login') }}" class="header-auth-login btn btn--primary">Login</a> --}}
                {{-- <a href="{{ route('register') }}" class="header-auth-register btn btn--secondary">Sign up</a> --}}
            </div>
        </div>
    </div>
</header>
