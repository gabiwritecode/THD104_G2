<?php
include("conn.php");
$pdo = getPDO();

$sql_a2 = "SELECT i.*, c.NAME as CATEGORY_NAME FROM INFORMATION i
          JOIN INFORMATION_CATEGORY c ON i.CATEGORY_ID = c.ID
          WHERE i.ID BETWEEN 6 AND 10 AND i.STATUS = 1";
$result_a2 = $pdo->query($sql_a2);

$data_a2 = array();
while ($row = $result_a2->fetch(PDO::FETCH_ASSOC)) {
    $data_a2[] = $row;
}

echo json_encode($data_a2);
?>