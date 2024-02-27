現在表示されている記事をデータベースから取得して表示させる
そのためにテーブルを作成して記事をデータベースに保存させる
1. テーブル定義を考える
2. 現在テンプレートで表示されている内容に応じて、必要なカラムを以下に示していく
   1. ヘッドライン
   2. 名前
   3. 投稿した日付
   4. フォロワー
   5. サブタイトル
   6. タイトル
   7. コンテンツ
   8. コメント
   9. タグ
   10. いいね

3. 上記に合わせて正規化を行って必要なテーブル定義する
post
|            | type        | UNIQUE | NOT NULL | DEFAULT | AUTO-INCREMENT | FK |
| id         | int         |        |          |         | ○              |    |
| headline   | string(100) |        |          |         |                |    |
| title      | string(100) |        |          |         |                |    |
| subtitle   | string(255) |        |          |         |                |    |
| content    | text        |        |          |         |                |    |
| created_at | date        |        |          |         |                |    |
| updated_at | date        |        |          |         |                |    |
| user_id    | int         |        |          |         |                | ○  |
tag
|      | type       | UNIQUE | NOT NULL | DEFAULT | AUTO-INCREMENT | FK |
| id   | int        |        |          |         | ○              |    |
| name | string(50) | ○      |          |         |                |    |
comment
|         | type        | UNIQUE | NOT NULL | DEFAULT | AUTO-INCREMENT | FK |
| id      | int         |        |          | ○       |                |    |
| user_id | int         |        |          |         | ○              |    |
| post_id | int         |        |          |         | ○              |    |
| comment | string(255) |        |          |         |                |    |
like
|         | type | UNIQUE | NOT NULL | DEFAULT | AUTO-INCREMENT | FK |
| id      | int  |        |          |         | ○              |    |
| post_id | int  |        |          |         |                | ○  |
like_count
|         | type | UNIQUE | NOT NULL | DEFAULT | AUTO-INCREMENT | FK |
| id      | int  |        |          |         |                |    |
| like_id | int  |        |          |         |                | ○  |
| count   | int  |        |          |         |                |    |


1. 投稿に対して、タグを取得したい
   タグテーブルにサンプルデータを挿入する
   タグテーブルとポストテーブルを中間テーブルで繋ぐ
   中間テーブルの情報を取得して、投稿データを取得する
   それを出力する
2. コメントを挿入したい
3. 少しずつずれているCSSの修正