<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization');
session_start();

if (isset($_SESSION["user_id"])) {
    include("conn.php"); // 包含資料庫連接檔案

    $userId = $_SESSION["user_id"];

    // 使用 PDO 進行資料庫查詢
    $sql = "SELECT * FROM MEMBER WHERE ID = :userId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();

    // 取得結果
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

 
    header('Content-Type: application/json');

    // 將結果轉為 JSON 格式並輸出
    echo json_encode($user);
}
?>
