@extends('Layouts.base')

@section('content')
<div id="content">
<div id="form-outer">
    <h1>create new Meeeeemo!</h1>
    <p>you input this area also ths freature nasu choizes is shun.</p>
    <form method ="post" action="/memo/create">
        {{ csrf_field() }}
        <div class="form-content">
            <div class="form-area">
                <input type="text" name ="event" id="event" value="" required placeholder="部位"/>
            </div>

            <div class="form-area day-area">
                <label style="color:#6E6E6E;">日時</label>
                <input type="date" name="day" id="day" required　/>
            </div>


            <div class="form-area">
                <input type="text" name="place" id="place" required placeholder="トレーニング場所"/>
            </div>

            <div id="data-area-outer">
                <div class="data-area" data-count="0">

                    <div class="meta-shumoku">
                        <input type="text" name="shumoku[0]" id="shumoku" required placeholder="種目" />
                    </div>
                    
                    <div class="meta-child">
                        <div>
                            <label style="color:#6E6E6E;">重量</label>
                            <input type="number" name="weight[0]" id="weight" required max="1000" />
                        </div>
                        <div>
                            <label style="color:#6E6E6E;">レップ</label>
                            <input type="number" name="rep[0]" id="rep" required max="1000" />
                        </div>
                        <div>
                            <label style="color:#6E6E6E;">セット</label>
                            <input type="number" name="set[0]" id="set" required max="1000" />
                        </div>
                    </div>

                </div>
            </div>


            <button id="addBtn">フォーム追加</button>
            <button id="delBtn">フォーム削除</button>


            <div class="form-area">
                <textarea name="memo" id="memo" cols="30" rows="10" required placeholder="メモ"></textarea>
            </div>

            <input type="hidden" name="isprivate" id="isprivate" value="" required/>

            <div>
                <button id="fire">記録</button>
            </div>
        </div>
    </form>
</div>
</div>
<script src="{{ asset('/js/main.js') }}"></script>


@endsection


