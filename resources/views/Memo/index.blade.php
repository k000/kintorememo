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




        <div class="index-list">
            <ul>
                @foreach($datas as $data)
                    <li><a href="{{action('MemoController@show',$data->id)}}">{{$data->event}}</a></li>
                    
                @endforeach
            </ul>
        </div>


    </div>
</div>

@endsection



