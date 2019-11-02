@extends('Layouts.base')

@section('content')

<div id="container">

    <div id="front-content">
        <h1>筋トレメモ</h1>
        <section>
            <p>
                筋トレの記録をいつでもどこもでメモできる。最強のWEBアプリケーションです。<br />
                Twitterアカウントさえあれば、誰でも無料で開始することができます。
            </p>
            <br />
            <span class="login-btn">
                <a href="{{ route("twitter.login") }}">Twitterアカウントでログインして利用開始する</a>
            </span>
        </section>
    </div>

    


    
        

</div>



@endsection


