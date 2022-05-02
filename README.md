# kidsreports

#概要
保育士さん用の簡単な連絡帳作成サイトです。
※PHP・Laravel学習用に作成したサイトです

## 使い方
保育士さん毎に受け持つクラスの園児の情報管理やシンプルな連絡帳の投稿ができます

## 管理者アドレス

メールアドレス:owner@gmail.com

パスワード:password

テストユーザーはアカウント作成からお願いいたします。

## 環境

xammp/MySQL/PHP/Laravel8.0

## データベース

データベース名：kidsreports
1.ファイルのダウンロード後、「.env.sample」ファイルの名前を「.env」に変更します。
2.「.env」ファイルを開き、DB_DATABASE=kidsreportsに変更。DB_USERNAME=DBユーザー名、DB_PASSWORD=DBパスワードはご自分の設定に変更してください
3.プロジェクトフォルダの直下でphp artisan key:generateを実行してください
4.ターミナルからcreate database kidsreportsを実行してください
5.php artisan migrateを実行すればデータベース上にテーブルが生成されます。
