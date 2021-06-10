<?php
include_once "database.php";
if(isset($_POST['save']))
{
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $b_day = $_POST['birthday'];
    $e_mail = $_POST['e-mail']."@nws-api.com";

    $age = date('Y') - $b_day;
    $year = $age - 1;
    abs($year);
    if ($year > 100 or $year < 8 ){

        echo "Birthday invalide";
        return;
    }


    if ($e_mail == "@nws-api.com"){
        $A_first = str_split($first_name);
        $automail = $A_first[0].$last_name."@nws-api.com";
        $e_mail = $automail;

        $sql = "select * from user where email like '%$e_mail%'";
        $res = $conn->query($sql);
       if ( $row = $res->fetch_assoc()){
            if ($row["Email"] == $e_mail)
        {
            $e_mail = $A_first[0].$last_name."1@nws-api.com";
            echo "e-mail auto create : " . $e_mail . " . ";

        }
        else {

            echo "e-mail auto create : " . $e_mail . " . ";
        }

    }}


    $sql = "INSERT INTO User (firstname,lastname,birthday,email)
	 VALUES ('$first_name','$last_name','$b_day','$e_mail')";



    if (mysqli_query($conn, $sql)) {
        echo "New User created successfully !";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

