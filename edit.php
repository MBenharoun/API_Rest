<?php
include_once "database.php";
$search_value = $_POST["id"];
$sql = "select * from user where Id like '%$search_value%'";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
echo $row["Firstname"]."  ".$row["Lastname"]."  ".$row["Birthday"] ;

?>
<!DOCTYPE HTML>
<html>

<form action="update.php" method="post">
<a>First Name :</a><input type="text" value="<?php $row["Firstname"] ?>" name="firstname">
<a>Last Name :</a><input type="text" value="<?php $row["Lastname"] ?>" name="lastname">
    <a>Birthday :</a><input type="date" max="2020-12-31" min = "1960-01-01" name="birthday">

    <a>Confirm your ID: </a><input type="int" name="id">
<input type="submit" name="save">
</form>

</html>

