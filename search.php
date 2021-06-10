<?php
include_once "database.php";
$search_value = $_POST["id"];
if ($conn->connect_error) {
    echo 'Connection Faild: ' . $conn->connect_error;
} else {
    if (!$search_value) {
        echo "no ID";
    }
    else {
        $sql = "select * from user where Id like '%$search_value%'";

        $res = $conn->query($sql);

        if ($row = $res->fetch_assoc()) {
            echo 'First name:  ' . $row["Firstname"];
            echo ' Last name:  ' . $row["Lastname"];
            echo ' Birthday:  ' . $row["Birthday"];
            echo ' Email:  ' . $row["Email"];


        }
        else echo "No User associated";
    }
}
