<?php

include('conn2.php');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

try {
    // 取得 POST 資料
    $memberID = isset($_POST['memberID']) ? $_POST['memberID'] : '';

    // 取得 PDO 連接對象
    $pdo = getPDO();

    // 準備 SQL 查詢
    $sql = "SELECT * FROM MEMBER WHERE ID = :memberID;";
    
    // 使用 PDO 預備語句
    $mem = $pdo->prepare($sql);
    $mem->bindParam(':memberID', $memberID, PDO::PARAM_STR);
    $mem->execute();
    
    // 取得查詢結果
    $result = $mem->fetchAll(PDO::FETCH_ASSOC);

    // 清除之前的输出缓冲
    ob_clean();

    // 檢查結果是否為空
    if (empty($result)) {
        echo json_encode(['error' => '找不到會員']);
    } else {
        // 成功時返回 JSON
        echo json_encode($result);
    }

    exit;

} catch (PDOException $e) {
    // 資料庫錯誤處理，返回 JSON 響應
    http_response_code(500);
    echo json_encode(['error' => '資料庫錯誤: ' . $e->getMessage()]);
    exit;
} finally {
    // 關閉資料庫連接
    if (isset($pdo)) {
        $pdo = null;
    }
}
?>



