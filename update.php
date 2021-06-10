<?php
include_once "database.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$bday = $_POST['birthday'];
$search_value = $_POST["id"];
$sql = "UPDATE `user` SET `Firstname` = '".$firstname."' , `Lastname` ='".$lastname."' ,`Birthday` ='".$bday."'WHERE `id` = ".$search_value;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}