<?php
// 包含資料庫連接文件
include 'conn2.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");
try {
    // 建立資料庫連接
    $pdo = getPDO();

    // 接收來自前端的值，這裡使用 $_POST
    $cityName = isset($_POST['cityName']) ? $_POST['cityName'] : '';

    // 使用參數化查詢執行 SQL 語句
    $sql = "SELECT CITY.ID, CITY.NAME, DISTRICT.ID, 
    MIN(DISTRICT.NAME) AS district_name,
    MIN(STORE.ID) AS store_id, 
    MIN(STORE.NAME) AS store_name,
    MIN(STORE.ADDRESS) AS address, 
    MIN(STORE.PHONE) AS phone_number,
    MIN(STORE.BUSINESS_HOURS) AS business_hours, 
    MIN(STORE.IFRAME) AS map_path
        FROM CITY
        JOIN DISTRICT ON CITY.ID = DISTRICT.CITY_ID
        JOIN STORE ON DISTRICT.ID = STORE.DISTRICT_ID
        WHERE CITY.NAME =:cityName
        GROUP BY CITY.ID, CITY.NAME, DISTRICT.ID, STORE.ID;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':cityName', $cityName, PDO::PARAM_STR);
    $stmt->execute();

    // 取得查詢結果
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   

    // 將結果轉換為 JSON 格式並輸出
    echo json_encode($result);

} catch (PDOException $e) {
    // 資料庫錯誤處理
    die("資料庫錯誤: " . $e->getMessage());
} finally {
    // 關閉資料庫連接
    if (isset($pdo)) {
        $pdo = null;
    }
}
?>
