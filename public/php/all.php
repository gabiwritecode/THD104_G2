<?php
include('conn2.php');


    try {
        $sql = "SELECT City.city_id, City.city_name, districts.district_id, MIN(districts.district_name) AS district_name,
                MIN(stores.store_id) AS store_id, MIN(stores.store_name) AS store_name,
                MIN(stores.address) AS address, MIN(stores.phone_number) AS phone_number,
                MIN(stores.business_hours) AS business_hours, MIN(stores.map_path) AS map_path
                FROM City
                JOIN districts ON City.city_id = districts.city_id
                JOIN stores ON districts.district_id = stores.district_id
                GROUP BY City.city_id, City.city_name, districts.district_id, stores.store_id;";

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
