@extends('Layouts.base')

@section('content')

<div id="home-content">
    <div>

        <div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>


        <h1>Index</h1>

        @foreach($datas as $data)
            <a href="/memo/{{$data->id}}">{{$data->event}}</a>
        @endforeach

        <div class="index-list">
            <ul>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
                <li>aaaaaa</li>
            </ul>
        </div>


    </div>
</div>

@endsection



