<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carsale";

session_start();

$currentUser = $_SESSION['username'];
if ($currentUser) {
    echo $currentUser;
} else {
    echo "not hello";
}

$conn = mysqli_connect($servername, $username, $password, $dbname); //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database");           //connect to database

$sql = "SELECT id FROM seller WHERE username='$currentUser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userId = $row['id'];
echo $userId;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    // $image = $_POST['image'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];
    $mileage = $_POST['mileage'];
    $location = $_POST['location'];
    $description = $_POST['description'];



    $targetDirectory = "uploads/";

    $imageName = uniqid() . "_" . $_FILES["image"]["name"];

    $targetPath = $targetDirectory . $imageName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
        $sql = "INSERT INTO carsinfo (image, make, model, year, price, mileage, location, description, user_id) VALUES ('$imageName', '$make', '$model', '$year', '$price', '$mileage', '$location', '$description', '$userId')";
        if ($conn->query($sql) === true) {
            $message = "Image uploaded and saved to database successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Location: addcar.php?message=' . urlencode($message));
        } else {
            $error = "Failed to save image to database.";
            echo "<script type='text/javascript'>alert('$error');</script>";
            header('Location: addcar.php?error=' . urlencode($error));
        }
    } else {
        echo "Failed to upload image.";
    }
}