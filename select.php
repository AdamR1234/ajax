<?php

require_once('config/config.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if(str_replace(" ", "", $row['pname'] != "")) //just checking for shit already in the db
            echo "<div id='output'>" . $row['pname'] . "</div></br>";
    }
    
}
