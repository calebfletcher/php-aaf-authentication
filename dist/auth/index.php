<?php

require_once __DIR__ . "/../includes/common.php";

header("Location: ".$config["auth_endpoint"]);
die();
