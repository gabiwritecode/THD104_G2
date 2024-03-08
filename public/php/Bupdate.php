<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

include 'conn2.php';  // 引入包含連線相關代碼的檔案

// 檢查是否是 POST 請求
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 讀取 JSON 資料
    $json_data = file_get_contents("php://input");
    $data = json_decode($json_data, true);

    try {
        // 使用 getPDO() 函數獲取 PDO 連線
        $pdo = getPDO();

        // 使用 prepared statement 更新數據
        $stmt = $pdo->prepare("UPDATE MEMBER 
        SET 
            STATUS = :status 
        WHERE ID = :id;");

        $stmt->bindParam(':status', $data['STATUS'], PDO::PARAM_INT);
        $stmt->bindParam(':id', $data['ID'], PDO::PARAM_INT);

        $stmt->execute();

        // 獲取更新後的 STATUS 值
        $updatedStatus = $pdo->query("SELECT STATUS FROM MEMBER WHERE ID = " . $data['ID'])->fetch(PDO::FETCH_ASSOC)['STATUS'];

        // 將更新後的 STATUS 值以 JSON 格式返回
        echo json_encode(['status' => 'success', 'message' => '更新成功', 'updatedStatus' => $updatedStatus]);
    } catch (PDOException $e) {
        // 如果發生錯誤，返回錯誤信息
        echo json_encode(['status' => 'error', 'message' => '更新失敗: ' . $e->getMessage()]);
    }
} else {
    // 如果不是 POST 請求，返回錯誤信息
    echo json_encode(['status' => 'error', 'message' => '只允許 POST 請求']);
}
?>
