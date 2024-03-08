<?php
include "conn.php";


$pdo = getPDO();
$sql = "INSERT INTO `ORDER`(ORDER_TIME, MEMBER_ID) VALUES (NOW(), '1')";
$statement = $pdo->prepare($sql);
$statement->execute();
$orderID = $pdo->lastInsertId();


    $json_data = file_get_contents("php://input");

    $myValue = json_decode($json_data, true);
    
  
    $pdo = getPDO();
    for ($i=0; $i < count($myValue); $i++) { 
      # code...
      $sql = "INSERT INTO ORDER_DETAIL(ORDER_ID, MEDIUM_PRICE, LARGE_PRICE, PRODUCT_NAME, QUANTITY, `SIZE`, SUGAR_LEVEL, ICE_LEVEL, TOPPINGS, CREATE_DATE) VALUES ('$orderID', ?, ?, ?, ?, ?, ?,?,?,NOW())";
      $statement = $pdo->prepare($sql);
      $statement->bindValue(1, $myValue[$i]['mediumPrice']);
      $statement->bindValue(2, $myValue[$i]['largePrice']);
      $statement->bindValue(3, $myValue[$i]['name']);
      $statement->bindValue(4, $myValue[$i]['num']);
      $statement->bindValue(5, $myValue[$i]['size']);
      $statement->bindValue(6, $myValue[$i]['sugar']);
      $statement->bindValue(7, $myValue[$i]['ice']);
      $statement->bindValue(8, $myValue[$i]['add']);
      $affectedRow = $statement->execute();

    }
       
    if($affectedRow > 0){
           echo "新增成功!";
    }else{
           echo "新增失敗!";
    }

    $pdo = getPDO();
    $sql = "SELECT * from ORDER_DETAIL a, `ORDER` b WHERE a.ORDER_ID = b.ID";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);


?>








