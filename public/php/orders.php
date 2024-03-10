<?php
include("conn.php");
$pdo = getPDO();
$sql = "SELECT o.ID, o.ORDER_TIME, o.MEMBER_ID, od.PRODUCT_NAME, od.MEDIUM_PRICE, od.LARGE_PRICE, od.QUANTITY, od.SIZE, od.SUGAR_LEVEL, od.ICE_LEVEL, od.TOPPINGS
        FROM `ORDER` o
        JOIN ORDER_DETAIL od ON o.ID = od.ORDER_ID
        ORDER BY o.ORDER_TIME DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($orders);
?>
