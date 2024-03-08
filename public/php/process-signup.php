<?php
include("conn.php");
$pdo = getPDO();

$response = array();

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

if (empty($data["name"])) {
    $response['error'] = "帳號為必填";
} elseif (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
    $response['error'] = "信箱為必填";
} elseif (strlen($data["password"]) < 6) {
    $response['error'] = "密碼至少需6個字元";
} elseif ($data["password"] !== $data["password_confirmation"]) {
    $response['error'] = "密碼不符合";
} else {
    $password = $data["password"];

    $sql = "INSERT INTO MEMBER (NAME, `E-MAIL`, PASSWORD, STATUS)
            VALUES (:name, :email, :password, 1)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $data["name"]);
    $stmt->bindParam(':email', $data["email"]);
    $stmt->bindParam(':password', $password); 

    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $errorCode = $stmt->errorInfo()[1];

        if ($errorCode === 1062) {
            $response['error'] = "EMAIL已註冊";
        } else {
            $response['error'] = $stmt->error . " " . $errorCode;
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
