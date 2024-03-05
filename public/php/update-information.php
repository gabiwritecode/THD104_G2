<?php
include("conn.php");
$pdo = getPDO();


if (!isset($_POST['InfoId'], $_POST['category'], $_POST['status'], $_POST['title'], $_POST['subtitle'], $_POST['text'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit;
}

// INPUT
$infoId = filter_var($_POST['InfoId'], FILTER_SANITIZE_NUMBER_INT);
$category = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
$status = filter_var($_POST['status'], FILTER_VALIDATE_INT);
$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
$subtitle = filter_var($_POST['subtitle'], FILTER_SANITIZE_STRING);
$text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);

// 上下架
if ($status !== 0 && $status !== 1) {
    echo json_encode(['success' => false, 'message' => 'Invalid status value']);
    exit;
}

// 選取分類資料
$categoryQuery = "SELECT NAME FROM INFORMATION_CATEGORY WHERE ID = :categoryId";
$categoryStatement = $pdo->prepare($categoryQuery);
$categoryStatement->bindParam(':categoryId', $category, PDO::PARAM_INT);
$categoryStatement->execute();
$categoryResult = $categoryStatement->fetch(PDO::FETCH_ASSOC);
$categoryName = $categoryResult['NAME'];

// INFORMATION 綁資料
$updateQuery = "UPDATE INFORMATION SET CATEGORY_ID = :categoryId, STATUS = :status, TITLE = :title, SUBTITLE = :subtitle, TEXT = :text WHERE ID = :infoId";
$updateStatement = $pdo->prepare($updateQuery);
$updateStatement->bindParam(':categoryId', $category, PDO::PARAM_INT);
$updateStatement->bindParam(':status', $status, PDO::PARAM_INT);  // Ensure that status is bound as an integer
$updateStatement->bindParam(':title', $title, PDO::PARAM_STR);
$updateStatement->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
$updateStatement->bindParam(':text', $text, PDO::PARAM_STR);
$updateStatement->bindParam(':infoId', $infoId, PDO::PARAM_INT);

try {
    $updateStatement->execute();

    if (isset($_FILES['image'])) {
        $uploadsDirectory = '../assets/';
        $uploadFile = $uploadsDirectory . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // 圖片路徑
            $imagePath = 'assets/' . $_FILES['image']['name'];

            
            $updateImageQuery = "UPDATE INFORMATION SET IMG = :imagePath WHERE ID = :infoId";
            $updateImageStatement = $pdo->prepare($updateImageQuery);
            $updateImageStatement->bindParam(':imagePath', $imagePath, PDO::PARAM_STR);
            $updateImageStatement->bindParam(':infoId', $infoId, PDO::PARAM_INT);
            $updateImageStatement->execute();

            echo json_encode(['success' => true, 'message' => 'Information updated successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error uploading image.']);
        }
    } else {
        echo json_encode(['success' => true, 'message' => 'Information updated successfully']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    exit;
}
?>
