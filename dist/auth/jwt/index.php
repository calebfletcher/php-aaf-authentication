<?php

require_once __DIR__ . "/../../includes/common.php";
use \Firebase\JWT\JWT;

$conn = new PDO($config["db_uri"], $config["db_username"], $config["db_password"]);

/*$decoded = JWT::decode($_POST["assertion"], $config["secret_key"], array("HS256"));

if (!isset($decoded->iss) || $decoded->iss !== $config["auth_issuer"]) {
    throw new UnexpectedValueException("Invalid Issuer");
}
if (!isset($decoded->aud) && $decoded->aud !== $config["auth_audience"]) {
    throw new UnexpectedValueException("Invalid audience");
}

$attributes = $decoded->{"https://aaf.edu.au/attributes"};
print_r($attributes);
*/

$stmt = $conn->prepare("SELECT email,edupersontargetedid,displayname,organisation FROM web_user WHERE email LIKE ?");
$status = $stmt->execute(["%"]);
if (!status) {
    throw new PDOException($conn->errorInfo()[2]);
}
$res = $stmt->fetchAll();
echo "<br /><br />";
foreach ($res as $row) {
    print_r($row);
}

/*if ($stmt->execute()) {
    echo $attributes->{"mail"};
    while ($row = $stmt->fetch()) {
        print_r($row);
    }
}
else {
    echo "error";
}*/
