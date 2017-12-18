<?php

require_once('config/config.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo $response = json_encode($result->fetch_all(),JSON_PRETTY_PRINT);
}
