<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADD CAR</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/car.css" />

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!--Navbar-->
  <header>
    <!--Nav Container-->
    <div class="nav container">
      <i class="bx bx-menu" id="menu-icon"></i>
      <a href="index.php" class="logo">Sport<span>Cars</span></a>
      <ul class="navbar">
        <?php 
        session_start();
        if (isset($_SESSION['username'])) {
          $username = $_SESSION['username']; // Get the username from the session
          echo "Welcome"."  ". ucfirst($username);
      }?>
        <li><a href="index.php">Home</a></li>
        <li><a href="addcar.php" class="active">Add Car</a></li>
        <!-- <li><a href="about-us.php">About Us</a></li> -->
        <!-- <li><a href="search.php">Search</a></li> -->
        <?php


// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    // If the username is set, display the link
    echo '<a href="search.php">search</a>';
    echo '<a href="logout.php">Logout</a>';

} else {
    // If the username is not set, do not display the link
    // echo 'You are not logged in.';
}
?>
      </ul>
    </div>
  </header>

  <!-- Add car  -->

  <div class="add-car">
    <h2>Add Car</h2>
    <form action="addcarlogic.php" method="post" enctype="multipart/form-data">
      <label>Make </label><input type="text" value="" name="make" /><br />
      <label>Model </label><input type="text" value="" name="model" /><br />
      <label>Year </label><input type="number" value="" name="year" /><br />
      <label>Mileage </label><input type="number" value="" name="mileage" /><br />
      <label>Location </label><input type="text" value="" name="location" /><br />
      <label>Price </label><input type="number" value="" name="price" /><br />
      <label>Description </label><input type="text" value="" name="description" /><br />
      <label>Image </label><input type="file" value="" name="image" /><br />


      <p style="color:red;text-align: center;">
        <?php
                if (isset($_GET['error'])) {
                echo $_GET['error'];
                }
                ?>
      </p>
      <p style="color:green;text-align: center;">
        <?php
                
                if (isset($_GET['message'])) {
                echo $_GET['message'];
                }
                ?>
      </p>
      <input type="submit" value="Add Car" />
    </form>
  </div>
</body>

</html>