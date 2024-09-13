<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Sale Website</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <!--Navbar-->
  <header>
    <!--Nav Container-->
    <div class="nav container">
      <i class='bx bx-menu' id="menu-icon"></i>
      <a href="index.php" class="logo">Sport<span>Cars</span></a>
      <ul class="navbar">
        <?php 
        session_start();
        if (isset($_SESSION['username'])) {
          $username = $_SESSION['username']; // Get the username from the session
          echo "Welcome"."  ". ucfirst($username);
      }?>
        <li><a href="index.php" class="active">Home</a></li>
        <?php


// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    // If the username is set, display the link
    // echo '<a href="search.php">search</a>';
        echo '<a href="addcar.php">Addcar</a>';
            echo '<a href="search.php">Search</a>';
            echo '<a href="about-us.php">About Us</a>';
            echo '<a href="logout.php">Logout</a>';


} 
else {
    // If the username is not set, do not display the link
    echo '<a href="car_registration.php">Registration</a>';
    echo '<a href="sellerpage.php">Seller </a>';
    // echo '<a href="search.php">Search</a>';
    echo '<a href="about-us.php">About Us</a>';




}
?>

      </ul>

    </div>
  </header>
  <section class="home" id="home"></section>
  <div class="home-text">
    <h1>Welcome to<br>Sport <span>Cars</h1>
    <p>We have everything you Need,</p>
    <p>Your Journey Starts Here: Driving Dreams, Delivering Quality</p>
    <p>At Sportcars, we are more than just a car dealership; we are your trusted partners in the pursuit of automotive
      excellence.</p>
    <a href="#" class="btn">Discover Now</a>
  </div>
  <div class="car-container container">
    <div class="box">
      <img src="./images/r35.jpg" alt="">
      <h2>Nissan GTR</h2>
    </div>
    <div class="box">
      <img src="./images/img2.png" alt="">
      <h2>Porsche Cars</h2>
    </div>
    <div class="box">
      <img src="./images/img3.png" alt="">
      <h2>Audi Cars</h2>
    </div>
    <div class="box">
      <img src="./images/img4.jpg" alt="">
      <h2>Bugatti Cars</h2>
    </div>
    <div class="box">
      <img src="./images/img5.jpg" alt="">
      <h2>Jaguar Cars</h2>
    </div>
    <div class="box">
      <img src="./images/img6.jpg" alt="">
      <h2>Koenigsegg Cars</h2>
    </div>
  </div>
</body>

</html>