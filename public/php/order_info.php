<?php



include("conn.php");
$pdo = getPDO();
// 取得 ORDER_DETAIL、ORDER、MEMBER 資料表的內容
$statement = $pdo->prepare("SELECT * FROM ORDER_DETAIL a
JOIN `ORDER` b ON a.ORDER_ID = b.ID
JOIN MEMBER c ON b.MEMBER_ID = c.ID
ORDER BY a.CREATE_DATE;");
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

// 用來存放根據 ORDER_ID 分組的訂單資訊
$groupedOrders = [];

// 將訂單資訊按照 ORDER_ID 分組
foreach ($result as $order) {
    $orderID = $order["ORDER_ID"];

    // 如果已經有這個 ORDER_ID 的陣列，將資料加進去，否則建立一個新的陣列
    if (isset($groupedOrders[$orderID])) {
        $groupedOrders[$orderID][] = $order;
    } else {
        $groupedOrders[$orderID] = [$order];
    }
}

// 將結果轉為索引陣列
$groupedOrders = array_values($groupedOrders);

// 輸出結果
echo json_encode($groupedOrders);


?>




