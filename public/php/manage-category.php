<?php
include("conn.php");
$pdo = getPDO();
// 取得分類TABLE
$statement = $pdo->prepare("SELECT ID, NAME, DESCRIPTION FROM INFORMATION_CATEGORY");

$statement->execute();
$categories = $statement->fetchAll();


header('Content-Type: application/json');

echo json_encode($categories);
?>
