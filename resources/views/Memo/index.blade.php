@extends('Layouts.base')

@section('content')


<h1>Index</h1>


@foreach($datas as $data)
    {{$data->event}}

    @for($i=0; $i < count($data->data); $i++)
        {{$data[$i]}}
    @endfor

@endforeach

@endsection


