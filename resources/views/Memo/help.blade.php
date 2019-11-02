@extends('Layouts.base')


@section('title')
ヘルプ | {{ config('app.name', '筋トレメモ') }}
@endsection

@section('content')


<div id="home-content">
    <div id="memo-content-outer">
        <h1>使い方</h1>
        <ul>
            <li>投稿を見る</li>
            <li>新規投稿をする</li>
            <li>投稿を削除する</li>
        </ul>
 
        <h3>投稿を見る</h3>
        <p>投稿を見るには投稿一覧画面から詳細の虫眼鏡ボタンを押します。</p>
        <h3>新規投稿をする</h3>
        <p>
            新規投稿をするには新規投稿画面で入力して記録ボタンを押します。
        </p>
        <h4>フォームを追加する</h4>
        <p>
            フォーム追加ボタンを押すと、トレーニング種目の最後に、トレーニング種目の入力エリアを追加できます。
        </p>
        <h4>フォームを削除する</h4>
        <p>
            フォーム削除ボタンを押すと、トレーニング種目の最後の入力エリアが削除されます。<br />
            入力エリアが１つしかない場合は削除されません。
        </p>
        <h3>投稿を削除する</h3>
        <p>
            投稿一覧ページの削除のゴミ箱ボタンを押して、「投稿を削除します」というメッセージにOKを押すと投稿が削除できます。
            
        </p>
    </div>

</div>

@endsection

@section('customjs')
<script src="{{ asset('/js/delete.js') }}"></script>
@endsection

