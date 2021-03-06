<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=0.5,maximum-scale=0.5,minimum-scale=0.5,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>andy</title>
    <link rel="stylesheet" href="{{asset('./mdl/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('./mdl/material-icon.css')}}">
    <link rel="stylesheet" href="{{asset('./css/common.css')}}">
    <script src="{{asset('./mdl/material.min.js')}}"></script>
    <script src="{{asset('./js/jquery.min.js')}}"></script>
</head>
<body>
    <div class="wrap">
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Andy Diary</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"`></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="/square">广场</a>
                    <a class="mdl-navigation__link" href="/topics">赏金问答</a>
                    <a class="mdl-navigation__link" href="/topics">积分当铺</a>
                    @if (Route::has('login'))
                        @auth
                            <a class="mdl-navigation__link" href="/dynamics">动态</a>
                            <a class="mdl-navigation__link" href="/collections">收藏</a>
                            <a class="mdl-navigation__link" href="/publish">发布新文章</a>
                            <a class="mdl-navigation__link" href="/settings">设置</a>
                            <div class="userbox">
                                <img src="{{ asset('./images/singledog.jpg') }}"/>
                            </div>
                        @else
                            <a class="mdl-navigation__link" href="{{ route('login') }}">Login</a>
                            <a class="mdl-navigation__link" href="{{ route('register') }}">Register</a>
                        @endauth
                    @endif
                </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Andy Diary</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">广场</a>
                    <a class="mdl-navigation__link" href="">赏金问答</a>
                    <a class="mdl-navigation__link" href="/topics">积分当铺</a>
                    @if (Route::has('login'))
                        @auth
                            <a class="mdl-navigation__link" href="/dynamics">动态</a>
                            <a class="mdl-navigation__link" href="/collections">收藏</a>
                            <a class="mdl-navigation__link" href="/publish">发布新文章</a>
                            <a class="mdl-navigation__link" href="/settings">设置</a>
                        @else
                            <a class="mdl-navigation__link" href="{{ route('login') }}">Login</a>
                            <a class="mdl-navigation__link" href="{{ route('register') }}">Register</a>
                        @endauth
                    @endif
                </nav>
            </div>
            @yield('content')
        </div>
    </div>
    <script src="{{asset('./js/common.js')}}"></script>
    @yield('pageScript')
</body>
</html>