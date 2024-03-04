<?php
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = getPDO();

    // 用AJAX獲取表單資料
    $categoryId = $_POST['categoryId'];
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];

    //SQL代碼

    $query = $pdo->prepare("UPDATE INFORMATION_CATEGORY SET name = ?, description = ? WHERE id = ?");
    $query->execute([$categoryName, $categoryDescription, $categoryId]);

    // 成功訊息
    echo json_encode(['success' => true, 'message' => '分類編輯成功']);
} else {
    // 錯誤訊息
    echo json_encode(['error' => 'Invalid request']);
}
?>
