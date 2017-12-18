<?php

    $conn = mysqli_connect("localhost","root","","ajax");


$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        
        echo "<div id='output'>" . $row['pname'] . "</div></br>";
    }
    
}


?>