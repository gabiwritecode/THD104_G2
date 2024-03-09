<?php
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    // 檢查 $data 是否為 null
    if ($data === null) {
        header('Content-Type: application/json');
        echo json_encode(array('success' => false, 'message' => 'Invalid JSON data'));
        exit;
    }

    $email = $data->email;
    $password = $data->password;

    try {
        $pdo = getPDO();
        // 修改欄位名稱
        $stmt = $pdo->prepare("SELECT * FROM MEMBER WHERE `E-MAIL` = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $user['PASSWORD'] === $password) {
            // 登入成功
            $response = array('success' => true, 'user_id' => $user['ID']);
            session_start();

          
            $_SESSION['userId'] = $user['ID'];
        } else {
            // 登入失敗
            $response = array('success' => false, 'message' => 'Invalid email or password');
        }
    }  catch (PDOException $e) {
        // 資料庫錯誤
        $response = array('success' => false, 'message' => 'Database error: ' . $e->getMessage());
    }
    

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // 不是 POST 請求，返回錯誤
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
}
?>
