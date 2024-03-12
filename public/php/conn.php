<?php
function getPDO() {
    // MySQL 相關訊息
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "password";
    $db_select = "THD104_G2";


    // 建立數據庫連結對象
    $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";
    $pdo = new PDO($dsn, $db_user, $db_pass);

    return $pdo;
}
?>
