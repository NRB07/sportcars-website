<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "carsale";

session_start();

$currentUser = $_SESSION['username'];
if($currentUser){
$conn = mysqli_connect($servername, $username, $password, $dbname) ;   //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database");

$sql = "SELECT id FROM seller WHERE username='$currentUser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userId = $row['id'];

if(    $_SERVER["REQUEST_METHOD"]=="POST"){
    $model= $_POST['model'];
    $location = $_POST['location'];

    $sql = "SELECT * FROM carsinfo WHERE model='$model' AND location='$location'";


    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $carId = $row['id'];
        // $username = $row['username'];
        // $_SESSION['username']=$username;
        header("Location: searchedcar.php?id=$carId");
        exit;
    }
} 
    else{
        $error_message = "Model Not found";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
        header('Location:search.php?error=' . urlencode($error_message));
    }


}

    $conn->close();
}