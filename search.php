<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/search.css" />

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
        <!-- <li><a href="car_registration.php">Registration</a></li>
        <li><a href="sellerpage.php">Seller </a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="search.php" class="active">Search</a></li> -->
        <?php
// Start the session


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



}
?>
      </ul>
    </div>
  </header>

  <!-- //SEarch Box container starts here -->

  <div class="search-box">
    <form action="search_submit.php" method="post">
      <a href="www.google.com"></a>
      <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" placeholder="Enter Model" />
      </div>
      <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter Location" />
      </div>
      <p style="color:red;">

        <?php
          if (isset($_GET['error'])) {
    echo $_GET['error'];
    }
?>
      </p>
      <div class="form-group">
        <button type="submit" class="search-button">Search</button>
      </div>
    </form>
  </div>
</body>

</html>