<?php
$loginid = $_POST['id'];
$loginpassword = $_POST['password'];
include "dbconnection.php";

$qry = "SELECT * from `data` WHERE EMAIL='$loginid' AND password='$loginpassword'";
$result = mysqli_query($conn, $qry);

$rows = mysqli_num_rows($result);
if ($rows > 0) {
    
    header("Location: http://localhost/index.php");
} else {
    echo "User Not Found";
}