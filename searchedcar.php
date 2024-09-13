<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/searchedcar.css" />
  <link rel="stylesheet" href="" />

  <title>Search Page</title>
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
    // echo '<a href="car_registration.php">Registration</a>';
    // echo '<a href="sellerpage.php">Seller </a>';
    // echo '<a href="search.php">Search</a>';



}
?>
        <!-- <li><a href="car_registration.php">Registration</a></li>
        <li><a href="sellerpage.php">Seller </a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="search.php" class="active">Search</a></li> -->
      </ul>
    </div>
  </header>

  <!-- Searched car results -->

  <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "carsale";
  
      // session_start();
      $conn = new mysqli($servername, $username, $password, $dbname);
  
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
  
      $carId = $_GET["id"];
      echo $carId;
      $sql = "SELECT * FROM carsinfo WHERE id = '$carId'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
  
              $imageName = $row["image"];
              $imagePath = "uploads/" . $imageName;
  
              $sqlForSellerName = "SELECT * FROM seller WHERE id = '$row[user_id]'";
              $resultForSellerName = $conn->query($sqlForSellerName);
              $rowForSellerName = $resultForSellerName->fetch_assoc();
  
              // $sellerName = $rowForSellerName['username'];
      ?>

  <div class="card">
    <h1 style="text-align: center;">Search Result Information:</h1>
    <div class="card-image">
      <img src="<?php echo $imagePath; ?>" alt="<?php echo $imageName; ?>" style="width:100%">
    </div>
    <div class="card-info">
      <p>
        <font color="black"><?php echo $row["description"]; ?></font>
      </p>
      <p class="price" style="color:black;">Price: $<?php echo $row["price"]; ?></p>
      <p class="price" style="color:black;">Model: <?php echo $row["model"]; ?></p>
      <p class="price" style="color:black;">Year: <?php echo $row["year"]; ?></p>
      <p class="price" style="color:black;">Mileage: <?php echo $row["mileage"]; ?></p>
      <p class="price" style="color:black;">Seller Name: <?php echo $rowForSellerName["name"]; ?></p>

      <p style="color:red;text-align: center;">
        <?php if (isset($_GET["error"])) {
                              echo $_GET["error"];
                          } ?>
      </p>

      <p>

        <!-- <button class="open-button">Buy</button> -->

      </p>
    </div>
  </div>
  <?php
          }
      } else {
          echo "Car not found.";
      }
  
      $conn->close();
      ?>


</body>

</html>
``


</body>

</html>