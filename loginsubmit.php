<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsale";
$tablename = "seller";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username1 = $_POST['username'];

    $password1 = $_POST['password'];
}

// //connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);   //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database");           //connect to database


// check if the database contains the user credintials
$query = "SELECT * FROM seller WHERE username='$username1' AND password='$password1'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $username1;
    header('Location: addcar.php');
    exit();
} else {
    $error_message = "Incorrect username or password";
    echo "<script type='text/javascript'>alert('$errormsg');</script>";
    header('Location:sellerpage.php?error=' . urlencode($error_message));
}