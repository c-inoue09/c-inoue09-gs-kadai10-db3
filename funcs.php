<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function db_connect(){
    try {
        //Password:MAMP='root',XAMPP=''
        $pdo = new PDO('mysql:dbname=gs_php02_submit;charset=utf8;host=localhost','root','');  
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError'.$e->getMessage());
      }
}

function loginCheck()
{
    if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id() ){ //isset: その値があるかどうか確認する
        exit('操作を行うには認証してください'); // ログインがおかしい場合
    }
    else{
        // ログインOKの場合
        session_regenerate_id();
        $_SESSION['chk_ssid'] = session_id();
    }
}

?>