@extends('Layouts.base')

@section('content')


<style>
    
    #memo-content-outer{
        width:90%;
        max-width:1200px;
        border:1px solid #000;
        margin:0 auto;
    }

    #memo-content-outer .head-area{
        padding:10px;
        display:flex;
        justify-content: space-between;
    }
    #memo-content-outer .head-area h1,p{
        padding:0;
        margin:0;
    }
    


</style>

<div id="memo-content-outer">
    
    <div class="head-area">
        <h1>{{$datas->event}}あき高田健志ってすごいよなぁ！？</h1>
        <p>{{$datas->place}}</p>
        <small>{{$datas->day}}</small>
    </div>

   

    <table>
        <thead>
            <tr class="table100-head">
                <th class="column1">種目</th>
                <th class="column2">重量</th>
                <th class="column3">レップ数</th>
                <th class="column4">セット数</th>
            </tr>
        </thead>
        <tbody>    
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


