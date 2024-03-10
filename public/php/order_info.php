<?php

include("conn.php");
$pdo = getPDO();
// 取得INFORMATION的TABLE內容
$statement = $pdo->prepare("SELECT * from ORDER_DETAIL a
join `ORDER` b on a.ORDER_ID = b.ID
join MEMBER c on b.MEMBER_ID = c.ID
order by CREATE_DATE;");
$statement->execute();


$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo ($result);


echo json_encode($result);

?>