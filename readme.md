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


# gitコマンドメモ

## 最後のcommitに戻す

git checkout -- ./




