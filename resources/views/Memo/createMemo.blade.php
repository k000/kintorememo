@extends('Layouts.base')

@section('content')

<h1>create new Meeeeemo!</h1>
<form method ="post" action="/memo/create">
    {{ csrf_field() }}
    <div class="form-area">
        トレーニング部位<input type="text" name ="event" id="event" value="" />
        日時<input type="date" name="day" id="day" />



        <div id="data-area-outer">
            <div class="data-area" data-count="0" style="background:#ffeeff;">
                種目：<input type="text" name="shumoku[0]" id="shumoku" />
                重量：<input type="text" name="weight[0]" id="weight" />
                レップ数：<input type="text" name="rep[0]" id="rep" />
                セット数：<input type="text" name="set[0]" id="set" />
            </div>
        </div>



        場所：<input type="text" name="place" id="place" />
        <input type="hidden" name="isprivate" id="isprivate" value="" />
        メモ：<textarea name="memo" id="memo" cols="30" rows="10"></textarea>
        
        <button id="addBtn">フォーム追加</button>
        <button id="delBtn">フォーム削除</button>
        
        <button>記録</button>

    </div>
</form>



<script>

        const addBtn = document.getElementById('addBtn')
        const delBtn = document.getElementById('delBtn')
        
        addBtn.addEventListener('click',(e)=>{
            e.preventDefault();

            const dataArea = document.getElementById('data-area-outer')
            const lastChild = dataArea.lastElementChild

            const cloneNode = lastChild.cloneNode(true)
            cloneNode.dataset.count = parseInt(lastChild.dataset.count) + 1;

            const nodes = cloneNode.childNodes

            nodes.forEach( (n) => {
                if(n.id === "shumoku")
                    n.name = "shumoku[" + cloneNode.dataset.count + "]";
                if(n.id === "weight")
                    n.name = "weight[" + cloneNode.dataset.count + "]";
                if(n.id === "rep")
                    n.name = "rep[" + cloneNode.dataset.count + "]";
                if(n.id === "set")
                    n.name = "set[" + cloneNode.dataset.count + "]";
            } );

            dataArea.appendChild(cloneNode);

        });

        delBtn.addEventListener('click',(e)=>{
            e.preventDefault();

            const dataArea = document.getElementById('data-area-outer')
            const lastChild = dataArea.lastElementChild

            if(lastChild.dataset.count === "0")
                return
            else
                dataArea.removeChild(lastChild)

        });

        //保存時のバリデーション
        //バリデーションエラーがあるうちはボタン押せないようにする。





    
</script>



@endsection


