<?php
    $host = '127.0.0.1';
    //改成你登入phpmyadmin帳號
    $user = 'root';
    //改成你登入phpmyadmin密碼
    $passwd = '*****';
    //資料庫名稱
    $database = 'main';
    //實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
    $connect = new mysqli($host, $user, $passwd, $database);
    
    if ($connect->connect_error) {
        die("連線失敗: " . $connect->connect_error);
    }
    // echo "連線成功";

    //設定連線編碼，防止中文字亂碼
    // $connect->query("SET NAMES 'utf8'");
    
    //選擇資料表user，條件是欄位id = 1的
    $selectSql = 'SELECT 姓名, 單位, 學號 FROM main_ou WHERE 學號="110911013"';
    //呼叫query方法(SQL語法)
    mysqli_query($link, 'SET NAMES utf8'); 
    $data =mysqli_query($link, $sql);
    $rs =mysqli_fetch_row($data);
    echo "$data <br> $rs <br> $rs[0] <br>";
    // echo $data
?>

