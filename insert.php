<?php



if(isset($_GET['product'])){
    $conn = mysqli_connect("localhost","root","","ajax");
$prod = $_GET['product'];

    
    
$stmt = $conn->prepare("INSERT INTO products (pname)
VALUES (?)");
    $stmt->bind_param("s", $prod);
    $stmt->execute();
    $stmt->close();
        
    
 }



?>