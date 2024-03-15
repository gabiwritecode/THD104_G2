<?php
include "conn.php";

// if(isset($_POST['submit'])){
// echo $_POST['submit'];
// }

// -----訂購者資料------
$json_data = file_get_contents("php://input");
$data = json_decode($json_data);
// echo $info;
$name = $data->name1;
$phone = $data->phone;
$address = $data->address;
$pdo = getPDO();


session_start();

$userId = $_SESSION["userId"];
   


$sql = "INSERT INTO `ORDER`(ORDER_TIME, MEMBER_ID, `NAME`, PHONE, `ADDRESS`) VALUES (NOW(), '$userId', ?, ?, ?)";
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $name);
$statement->bindValue(2, $phone);
$statement->bindValue(3, $address);
$affectedRow = $statement->execute();
// -----------------------------------

// ------訂單明細-------
$orderID = $pdo->lastInsertId();


    $orderDetails = $data->myValue;
    foreach ($orderDetails as $orderDetail) {
       $sql = "INSERT INTO ORDER_DETAIL(ORDER_ID, MEDIUM_PRICE, LARGE_PRICE, PRODUCT_NAME, QUANTITY, `SIZE`, SUGAR_LEVEL, ICE_LEVEL, TOPPINGS, CREATE_DATE) VALUES ('$orderID', ?, ?, ?, ?, ?, ?,?,?,NOW())";
       $statement = $pdo->prepare($sql);
       $statement->bindValue(1, $orderDetail->mediumPrice);
       $statement->bindValue(2, $orderDetail->largePrice);
       $statement->bindValue(3, $orderDetail->name);
       $statement->bindValue(4, $orderDetail->num);
       $statement->bindValue(5, $orderDetail->size);
       $statement->bindValue(6, $orderDetail->sugar);
       $statement->bindValue(7, $orderDetail->ice);
       $statement->bindValue(8, $orderDetail->add);
       
       $affectedRow = $statement->execute();
 
    }
       
    if($affectedRow > 0){
           echo "新增成功!";
    }else{
           echo "新增失敗!";
    }

//     $pdo = getPDO();
//     $sql = "SELECT * from ORDER_DETAIL a
//     join `ORDER` b on a.ORDER_ID = b.ID
//     join MEMBER c on b.MEMBER_ID = c.ID;";
//     $statement = $pdo->prepare($sql);
//     $statement->execute();
//     $result = $statement->fetchAll(PDO::FETCH_ASSOC);

//     echo json_encode($result);


?>








