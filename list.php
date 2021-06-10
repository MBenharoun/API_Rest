<?php
include_once "database.php";
$sql = "SELECT id, firstname, lastname, birthday, Email FROM user";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $date = $row["birthday"];
        $age = date('Y') - $date;
        $year = $age - 1;
        echo "id: " . $row["id"]. " - Full Name: " . $row["firstname"]. " " . $row["lastname"]." | Birthday : ".$row["birthday"]." "."$year"." Year Old"." Adresse Mail : ".$row["Email"]."<br>";
    }
} else {
    echo "0 results";
}

$sql2="select count(*) as total from user";
$result2=mysqli_query($conn,$sql2);
$data=mysqli_fetch_assoc($result2);
echo "Number of User : ".$data['total'];
$conn->close();
