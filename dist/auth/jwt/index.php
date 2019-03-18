<?php

require_once __DIR__ . "/../../includes/common.php";
use \Firebase\JWT\JWT;

try {
    $decoded = JWT::decode($_POST["assertion"], $config["secret_key"], array("HS256"));
    if (isset($decoded->iss) && $decoded->iss === $config["auth_issuer"]) {
        echo "issuer good";
    }
    if (isset($decoded->aud) && $decoded->aud === $config["auth_audience"]) {
        echo "audience good";
    }
    $decoded_array = (array) $decoded;
    print_r($decoded_array);
} catch (Firebase\JWT\SignatureInvalidException $e) {
    echo $e->getMessage();
} catch (Firebase\JWT\ExpiredException $e) {
    echo $e->getMessage();
} catch (Firebase\JWT\BeforeValidException $e) {
    echo $e->getMessage();
} catch (UnexpectedValueException $e) {
    echo "Malformed Token: ".$e->getMessage();
} catch (Exception $e) {
    echo "Token Decode Error: ".$e->getMessage();
}
