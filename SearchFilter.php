<?php
include_once "database.php";
$target = $_POST["texte"];
$atr = $_POST["Atr"];
if ($atr == ""){
   echo "Filter unselected";
   return;
}

if ($conn->connect_error) {
    echo 'Connection Faild: ' . $conn->connect_error;
} else {
    $sql = " select * from user where ".$atr." like '%$target%'";
    $res = $conn->query($sql);
    While ($row = $res->fetch_assoc()) {
        echo 'First name:  ' . $row["Firstname"];
        echo ' Last name:  ' . $row["Lastname"];
        echo ' Birthday:  ' . $row["Birthday"];
        echo ' Email:  ' . $row["Email"]."
        ";


    }
}