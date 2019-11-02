@extends('Layouts.base')


@section('title')
ホーム | {{ config('app.name', '筋トレメモ') }}
@endsection

@section('content')


<div id="home-content">
    <div id="memo-content-outer">
        <h1>Index</h1>
        <table class="memo-table">
                <thead>
                    <tr class="memo-table-head">
                        <th class="column1">詳細</th>
                        <th class="column2">日付</th>
                        <th class="column3">トレーニング部位</th>
                        <th class="column4">場所</th>
                        <th class="column5">削除</th>
                    </tr>
                </thead>
                <tbody class="memo-table-data"> 
                    @foreach($datas as $data)
                        <tr>
                            <td class="column"><a href="{{action('MemoController@show',$data->id)}}"><i class="fas fa-search shosai"></i></a></td>
                            <td class="column">{{$data->day}}</td>    
                            <td class="column">{{$data->event}}</td>    
                            <td class="column">{{$data->place}}</td>    
                            <td class="column">
                                <a href="#" data-id="{{$data->id}}" class="gomi"><i class="fas fa-trash"></i></a>

                                <form method="post" action="{{url('/memo',$data->id)}}" id="form_{{$data->id}}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>

@endsection

@section('customjs')
<script src="{{ asset('/js/delete.js') }}"></script>
@endsection

