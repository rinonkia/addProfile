# addProfile

自作プロフィールアプリです。

### 概要

自作プロフィールサイトです。
昔あった前略プロフィールみたいなものです。

herokuにてデプロイ中。

 - アカウントを持ってなくてもプロフィール閲覧可能
 - ユーザは好きなお題とアンサーでプロフィールを作成できる
 - ユーザは自由自己紹介欄を追加もしくは削除できる
 - ストレージはS3を利用。自身の画像を追加した場合、古い画像は削除される
 - アカウント生成すると同時にサンプルプロフィールを生成
 - 作成したページのURLが生成されるため、URLを使った共有が容易に

少しずつリファクタリング中(2019/1/8)

## 技術的なメモ