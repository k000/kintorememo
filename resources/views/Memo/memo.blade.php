@extends('Layouts.base')

@section('content')


    <h1>個別記事</h1>

    @for($i=0; $i < count($datas->data->shumoku); $i++)
        種目{{$datas->data->shumoku[$i]}}
        重さ{{$datas->data->weight[$i]}}
        回数{{$datas->data->rep[$i]}}
        セット{{$datas->data->set[$i]}}
    @endfor

    


@endsection


