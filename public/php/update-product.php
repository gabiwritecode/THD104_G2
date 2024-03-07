<?php
include("conn.php");
$pdo = getPDO();


if (!isset($_POST['name'], $_POST['priceM'], $_POST['priceL'], $_POST['tag'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit;
}

// INPUT
// $category = filter_var($_POST['category'], FILTER_SANITIZE_NUMBER_INT);
$productId = filter_var($_POST['productId'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$priceM = filter_var($_POST['priceM'], FILTER_SANITIZE_NUMBER_INT);
$priceL = filter_var($_POST['priceL'], FILTER_SANITIZE_NUMBER_INT);
$tag = filter_var($_POST['tag'], FILTER_SANITIZE_STRING);



// PRODUCT 綁資料
$updateProductsQuery = "UPDATE PRODUCTS SET NAME = :name, TAG = :tag WHERE ID = :productId";
$updateStatement = $pdo->prepare($updateProductsQuery);
$updateStatement->bindParam(':name', $name, PDO::PARAM_STR);
$updateStatement->bindParam(':tag', $tag, PDO::PARAM_STR);
$updateStatement->bindParam(':productId', $productId, PDO::PARAM_INT);
$updateStatement->execute();


// 改Ｍ價格
$updatePriceM = "UPDATE PRODUCTS_PRICE SET PRICE = :priceM  WHERE SIZE='M' and PRODUCTS_ID = :productIdM";
$updatePriceMStatement = $pdo->prepare($updatePriceM);
$updatePriceMStatement->bindParam(':productIdM', $productId, PDO::PARAM_INT);
$updatePriceMStatement->bindParam(':priceM', $priceM, PDO::PARAM_INT);
$updatePriceMStatement->execute();


// 改Ｌ價格
$updatePriceL = "UPDATE PRODUCTS_PRICE SET PRICE = :priceL  WHERE SIZE='L' and PRODUCTS_ID = :productIdL";
$updatePriceLStatement = $pdo->prepare($updatePriceL);
$updatePriceLStatement->bindParam(':priceL', $priceL, PDO::PARAM_INT);
$updatePriceLStatement->bindParam(':productIdL', $productId, PDO::PARAM_INT);
$updatePriceLStatement->execute();

echo '{"productId":1}';
?>
