@extends('Layouts.base')

@section('content')


<h1>Index</h1>


@foreach($datas as $data)
    <a href="/memo/{{$data->id}}">{{$data->event}}</a>
@endforeach

@endsection


