<?php
//if product is set, and not equal to "" or empty spaces
// i replaced the spaces with nothing so we can check for emptiness easily
if(isset($_GET['product']) && str_replace(" ", "", $_GET['product']) != '') {
    require_once('config/config.php');
    $prod = $_GET['product'];

    $stmt = $conn->prepare("INSERT INTO products(pname)
                                  VALUES (?)");
    $stmt->bind_param("s", $prod);
    $stmt->execute();
    $stmt->close();

 }
?>