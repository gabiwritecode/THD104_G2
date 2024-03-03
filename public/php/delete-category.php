<?php
include("conn.php");

// 讀取input數值
$input = json_decode(file_get_contents('php://input'), true);
$categoryId = $input['categoryId'];

$pdo = getPDO();

try {
    // 刪除該筆資料
    $deleteStatement = $pdo->prepare("DELETE FROM INFORMATION_CATEGORY WHERE ID = ?");
    $deleteStatement->execute([$categoryId]);

    // 刪除成功
    echo json_encode(['success' => true, 'message' => '成功刪除分類']);
} catch (PDOException $e) {
    // 刪除失敗
    echo json_encode(['error' => '刪除分類失敗']);
}
?>
