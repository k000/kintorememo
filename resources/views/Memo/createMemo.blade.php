@extends('Layouts.base')

@section('title')
新規投稿 | {{ config('app.name', '筋トレメモ') }}
@endsection

@section('content')
<div id="content">
<div id="form-outer">
    <h1>新規投稿</h1>

    
    @if(count($errors) > 0)
        <div class="error-message">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    

    <form method ="post" action="/memo/create">
        {{ csrf_field() }}
        <div class="form-content">
            <div class="form-area">
                <input type="text" name ="event" id="event" value="{{ old('event') }}" required placeholder="部位(25文字まで)"/>
            </div>

            <div class="form-area day-area">
                <label style="color:#6E6E6E;">日時</label>
                <input type="date" name="day" id="day" required　value="{{ old('day') }}" />
            </div>


            <div class="form-area">
                <input type="text" name="place" id="place" value="{{ old('place') }}" required placeholder="トレーニング場所(25文字まで)"/>
            </div>

            <div id="data-area-outer">
                <div class="data-area" data-count="0">

                    <div class="meta-shumoku">
                        <input type="text" name="shumoku[0]" id="shumoku" value="{{ old('shumoku[0]') }}" required placeholder="種目" />
                    </div>
                    
                    <div class="meta-child">
                        <div>
                            <label style="color:#6E6E6E;">重量</label>
                            <input type="number" name="weight[0]" id="weight" value="{{ old('weight[0]') }}" required max="1000" />
                        </div>
                        <div>
                            <label style="color:#6E6E6E;">レップ</label>
                            <input type="number" name="rep[0]" id="rep" value="{{ old('rep[0]') }}" required max="1000" />
                        </div>
                        <div>
                            <label style="color:#6E6E6E;">セット</label>
                            <input type="number" name="set[0]" id="set" value="{{ old('set[0]') }}" required max="1000" />
                        </div>
                    </div>

                </div>
            </div>


            <button id="addBtn">フォーム追加</button>
            <button id="delBtn">フォーム削除</button>


            <div class="form-area">
                <textarea name="memo" id="memo" cols="30" rows="10" required placeholder="メモ(1000文字まで)">{{ old('memo') }}</textarea>
            </div>

            <input type="hidden" name="isprivate" id="isprivate" value="" required/>

            <div>
                <button id="fire">記録</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection


@section('customjs')
<script src="{{ asset('/js/main.js') }}"></script>
@endsection



