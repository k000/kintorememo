@extends('Layouts.base')

@section('content')

<div id="home-content">
    <div>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
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
        

    </div>
</div>

@endsection



