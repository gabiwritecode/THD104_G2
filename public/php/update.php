<?php
include 'conn2.php';  // 引入包含連線相關代碼的檔案

// 檢查是否是 POST 請求
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 解析 JSON
    $data = json_decode(file_get_contents('php://input'), true);

    // 檢查 JSON 解析是否成功
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['status' => 'error', 'message' => '解析 JSON 失敗']);
        exit;
    }

    try {
        // 使用 getPDO() 函數獲取 PDO 連線
        $pdo = getPDO();

        // 使用 prepared statement 更新數據
        $stmt = $pdo->prepare("UPDATE stores 
            SET store_name = :store_name, 
                phone_number = :phone_number, 
                address = :address 
            WHERE store_id = :store_id");

        $stmt->bindParam(':store_name', $data['store_name'], PDO::PARAM_STR);
        $stmt->bindParam(':phone_number', $data['phone_number'], PDO::PARAM_STR);
        $stmt->bindParam(':address', $data['address'], PDO::PARAM_STR);
        $stmt->bindParam(':store_id', $data['store_id'], PDO::PARAM_INT);

        $stmt->execute();

        echo json_encode(['status' => 'success', 'message' => '更新成功']);
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => '更新失敗: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => '僅接受 POST 請求']);
}
?>