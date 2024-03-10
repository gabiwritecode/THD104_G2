<?php
include('conn2.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization');

try {
    // 確保這個查詢僅返回JSON格式的結果
    $sql = "SELECT * FROM MEMBER;";
    
    // 使用 PDO 執行查詢
    $statement = getPDO()->query($sql);

    // 設定正確的 Content-Type 標頭
    header('Content-Type: application/json');

    if ($statement !== false) {
        // 取得結果集中的所有行數據
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        // 將數據編碼為 JSON 格式並輸出
        echo json_encode($data);
    } else {
        // 如果查詢出錯，返回錯誤消息
        echo json_encode(['error' => 'Error in query execution']);
    }
} catch (PDOException $e) {
    // 如果有異常，返回異常消息
    echo json_encode(['error' => 'PDO Exception: ' . $e->getMessage()]);
}
?>
