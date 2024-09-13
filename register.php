<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsale";
$tablename = "seller";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username1 = $_POST['username'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password1 = $_POST['password'];
}

// //connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);   //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database");           //connect to database


//insert value to database
$sql = "INSERT INTO seller (name, email, username, phone, address, password) VALUES ('$name', '$email', '$username1', '$phone', '$address', '$password1')";
if ($conn->query($sql) === true) {
    // echo "New record created successfully";
    header('Location: sellerpage.php');
    exit();
} else {
    $error_message = "Error while inserting the record! Please try again.";
    echo "<script type='text/javascript'>alert('$errormsg');</script>";
    header('Location:car_registration.php?error=' . urlencode($error_message));
}

// print'<script>alert("Congrats! Your Submission is Successfully Registered!");</script>';


// header("Location: registration.html");