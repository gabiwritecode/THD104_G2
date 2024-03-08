<?php
include("conn.php");
$pdo = getPDO();

$sql_a = "SELECT i.*, c.NAME as CATEGORY_NAME FROM INFORMATION i
          JOIN INFORMATION_CATEGORY c ON i.CATEGORY_ID = c.ID
          WHERE i.ID BETWEEN 1 AND 5 AND i.STATUS = 1";
$result_a = $pdo->query($sql_a);

$data_a = array();
while ($row = $result_a->fetch(PDO::FETCH_ASSOC)) {
    $data_a[] = $row;
}

echo json_encode($data_a);
?>
