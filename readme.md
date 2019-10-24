
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



