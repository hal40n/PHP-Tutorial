<?php

  const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1ls;charset=utf8';
  const DB_USER = 'php_user';
  const DB_PASSWORD = 'password123';

  // 例外処理

try {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo '接続失敗' . $e -> getMessage(). "\n";
    exit();
}
