<?php
include('conn2.php');
          

try {
    $sql = "SELECT CITY.ID, CITY.NAME, DISTRICT.ID, MIN(DISTRICT.NAME) AS DISTRICT_NAME,
    MIN(STORE.ID) AS STORE_ID, MIN(STORE.NAME) AS STORE_NAME,
    MIN(STORE.ADDRESS) AS ADDRESS, MIN(STORE.PHONE) AS PHONE_NUMBER,
    MIN(STORE.BUSINESS_HOURS) AS BUSINESS_HOURS, MIN(STORE.IFRAME) AS IFRAME
    FROM CITY
    JOIN DISTRICT ON CITY.ID = DISTRICT.CITY_ID
    JOIN STORE ON DISTRICT.ID = STORE.DISTRICT_ID
    GROUP BY CITY.ID, CITY.NAME, DISTRICT.ID, STORE.ID;";

    $statement = getPDO()->query($sql);
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Set the correct Content-Type header
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    header('Access-Control-Allow-Methods: GET, POST');
          
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');

    // Check if data is not empty
    if (!empty($data)) {
        // Encode data as JSON and output
        echo json_encode($data);
    } else {
        // If no data found, return an empty JSON array
        echo json_encode([]);
    }
} catch (PDOException $e) {
    // If an error occurs, return an error message
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
}
?>
