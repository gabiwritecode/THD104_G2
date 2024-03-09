<?php

include("conn.php");
$pdo = getPDO();
// 取得INFORMATION的TABLE內容
$statement = $pdo->prepare("SELECT * from `ORDER` a join MEMBER b on a.MEMBER_ID = b.id;");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);

?>