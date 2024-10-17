# アプリケーション名  
もぎたて  


## 環境構築  　　
Dockerビルド  　　
　1 git clone git@github.com:kochiyama-h/test2.git   　　
  2 docker-compose up -d --build  　　

Laravel 環境構築　　
　 1 docker-compose exec php bash　　
   2 composer install　　
   3 env.exampleファイルからevnを作成し、環境変数を変更　　
   4 php artisan key:　　
   5 php artisan migrate　　
   6 php artisan db:seed　　

## 使用技術(実行環境)　　
  - PHP 7.4　　
  -Laravel 8.75　　
  -MySQL 8.0.26　　

## ER図　　

     ![ER図 drawio](https://github.com/user-attachments/assets/23c9cce6-aaa0-4a0f-83b2-5ddac80ec233)

 


## URL　　
-開発環境：http://localhost/　　
-phpMyAdmin：http://localhost:8080　　


 
