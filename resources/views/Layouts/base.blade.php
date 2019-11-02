<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    @yield('stylesheet')
    
    <body>
        <div id="wrapper">
            <head>
                <nav>

                    <ul>
                        @auth
                        <div>
                            <li><a href="{{action('MemoController@index')}}">ホーム</a></li>
                            <li><a href="{{action('MemoController@create')}}">新規投稿</a></li>
                            <li><a href="/help">ヘルプ</a></li>
                        </div>
                        <div>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                        @endauth

                        @guest
                            <div>ログイン</div>
                        @endguest

                    </ul>
                </nav>
            </head> 

            @yield('content')

            @include('Layouts.footer')
        </div>
        @yield('customjs')
    </body>
</html>