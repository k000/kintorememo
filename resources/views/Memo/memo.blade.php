@extends('Layouts.base')


@section('title')
{{$datas->event}}/{{$datas->day}} | {{ config('app.name', '筋トレメモ') }}
@endsection



@section('content')


<style>
    


</style>

<div id="memo-content-outer">
    
    <div class="head-area">
        <h1>{{$datas->event}}</h1>
        <p>{{$datas->place}}</p>
        
    </div>
    <div id="head-area-day">
        <small>{{$datas->day}}</small>
    </div>



    <table class="memo-table">
        <thead>
            <tr class="memo-table-head">
                <th class="column1">種目</th>
                <th class="column2">重量</th>
                <th class="column3">レップ数</th>
                <th class="column4">セット数</th>
            </tr>
        </thead>
        <tbody class="memo-table-data">    
            @for($i=0; $i < count($datas->data->shumoku); $i++)
                <tr>
                    <td class="column{{$i}}">{{$datas->data->shumoku[$i]}}</td>    
                    <td class="column{{$i}}">{{$datas->data->weight[$i]}}</td>    
                    <td class="column{{$i}}">{{$datas->data->rep[$i]}}</td>    
                    <td class="column{{$i}}">{{$datas->data->set[$i]}}</td>    
                </tr>
            @endfor
        </tbody>
    </table>

    <p>{{$datas->memo}}</p>
  
</div>
    


@endsection


