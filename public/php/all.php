<?php
include('conn2.php');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type");
        header("Access-Control-Allow-Credentials: true");

    try {
        $sql = "SELECT CITY.ID, CITY.NAME, DISTRICT.ID AS district_id, MIN(DISTRICT.NAME) AS district_name,
        MIN(STORE.ID) AS store_id, MIN(STORE.NAME) AS store_name,
        MIN(STORE.ADDRESS) AS address, MIN(STORE.PHONE) AS phone_number,
        MIN(STORE.BUSINESS_HOURS) AS business_hours, MIN(STORE.IFRAME) AS IFRAME
        FROM CITY
        JOIN DISTRICT ON CITY.ID = DISTRICT.CITY_ID
        JOIN STORE ON DISTRICT.ID = STORE.DISTRICT_ID
        GROUP BY CITY.ID, CITY.NAME, DISTRICT.ID, STORE.ID;";

        $statement = getPDO()->query($sql);

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        

        // Output JSON data
        echo json_encode($data);
        exit;
    } catch (PDOException $e) {
        echo json_encode(array('error' => 'Error: ' . $e->getMessage()));
        exit;
    }

?>
