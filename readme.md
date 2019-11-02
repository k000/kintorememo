# 画面

## 投稿一覧画面

![index](https://user-images.githubusercontent.com/39722427/68069973-23996080-fdab-11e9-8ef6-29fa980314fe.png)

投稿一覧画面から詳細画面への遷移、削除機能を使うことができます。


## 投稿画面

![create](https://user-images.githubusercontent.com/39722427/68070017-94407d00-fdab-11e9-9e2c-a298b2edee68.png)

投稿画面では新規投稿ができます。
フォームエリアは追加削除ができるので
ハイボリュームなトレーニングもしっかり記録できます。

## 投稿詳細画面

![memo](https://user-images.githubusercontent.com/39722427/68070036-c5b94880-fdab-11e9-830d-60d048354128.png)

詳細画面は、、、まぁ普通です。
技術的な話をすると、MySQLのjson型に頼らず(頼れず)
jsと連携をとって上手に？変換しております。


# 勉強メモ


## 機能

- 筋トレ記録を新規投稿できる
- 筋トレ記録の一覧を表示できる
- 筋トレ記録の詳細を表示できる
- 筋トレ記録を削除できる


## Laravel プロジェクトの作成

composer create-project --prefer-dist laravel/laravel KintoreMemo


## マイグレーションファイルの作成

php artisan make:migration create_memos_table

json型がワケあって使用できないので、binary型で代用する。


## マイグレーションの実行

php artisan migrate


| 型 | カラム名 |
----|---- 
| bigIncrements | id |
| string | event |
| binary | data |
| date | day |
| string | place |
| boolean | isprivate |
| text | memo |
| timestamps |  |


mysql> show tables;  
+-----------------------+  
| Tables_in_kintorememo |  
+-----------------------+  
| failed_jobs           |  
| memos                 |  
| migrations            |  
| password_resets       |  
| users                 |  
+-----------------------+  
  
mysql> show columns from memos;  
+------------+---------------------+------+-----+---------+----------------+  
| Field      | Type                | Null | Key | Default | Extra          |  
+------------+---------------------+------+-----+---------+----------------+  
| id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |  
| event      | varchar(191)        | NO   |     | NULL    |                |  
| data       | blob                | NO   |     | NULL    |                |  
| day        | date                | NO   |     | NULL    |                |  
| place      | varchar(191)        | NO   |     | NULL    |                |  
| isprivate  | tinyint(1)          | NO   |     | NULL    |                |  
| memo       | text                | NO   |     | NULL    |                |  
| created_at | timestamp           | YES  |     | NULL    |                |  
| updated_at | timestamp           | YES  |     | NULL    |                |  
+------------+---------------------+------+-----+---------+----------------+  


## サービスプロバイダの作成

php artisan make:provider RepositoryServiceProvider

config/app.phpに追加しておく。


## コントローラーの作成

php artisan make:controller MemoController



## モデルの作成

php artisan make:model Memo


## サービスプロバイダを編集する

Memoモデルをnewしたものを返却させる


## テストの作成

hp artisan make:test MemoTest --unit

tests/UnitフォルダにMemoTest.phpができる。


## テストの実行

php vendor/bin/phpunit tests/Unit/MemoTest.php


## フォームリクエストの作成

php artisan make:request MemoValiRequest

→お馴染みのRequestクラスを継承しているので、コントローラーの引数だけ変更すれば良い。


## 可変フォーム値のやりとり

json_encode — 値を JSON 形式にして返す

json_decode — JSON 文字列をデコードする


## テーブルにカラムを追加する

php artisan make:migration add_user_id_to_memos_table --table=memos

## リレーションを作成する

users × memos


## Implicit Binding

- route
```
Route::get('/memo/{id}','MemoController@show');
```

```
<a href="{{action('MemoController@show',$data->id)}}"><i class="fas fa-search shosai"></i></a>
```


## Socialiteのインストール

composer require laravel/socialite 


## laravelの認証

php artisan make:auth


## Auth ミドルウェア

```
Route::group(['middleware' => 'auth'],function(){
    Route::get('/memo', 'MemoController@index');
});
```

# gitコマンドメモ

## 最後のcommitに戻す

git checkout -- ./


# bladeファイルメモ


## ログインユーザーかどうか確認する
```
@auth
    hogehoge
@endauth

@guest
    hogehoge
@endguest
```


# JavaScriptメモ

ラムダのthisは注意

```
const dels = document.getElementsByClassName('gomi')

for(i=0;i<dels.length;i++){
    dels[i].addEventListener('click', function(e) {
```
ここをラムダで定義すると宣言時のthisとなるので
うまく要素を指定できないyo


## データ属性

### データ属性の取得
<div class="data-area" data-count="0">
→ lastChild.dataset.count // 0


### データ属性の設定

lastChild.dataset.count = "1"


## 最後の子要素

lastElementChild

## 要素をコピーする

const cloneNode = lastChild.cloneNode(true)

## 要素を追加

dataArea.appendChild(cloneNode);


## 変換

文字列→数値
lastChild.dataset.count("1")


# 参考にさせてもらった凄いサイト

## RitoLabo様

https://www.ritolab.com/

## LaravelでTwitter認証(ログイン)機能をサクッと作る

https://pllogg.com/laravel/1320/




# 反省点

早い段階であれこれ考えて、テストを書いてみたりしてみたが
最終的にこの機能も欲しいよなっていうのが出てきたり
最初のテーブルの設計が漏れていた(user_id)など

まぁ思いつきで勢いで作ったプロジェクトなので
仕方ない部分もあるが、最初に決めておくことは大事だなと。。。
