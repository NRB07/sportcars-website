<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Seller Info</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/seller.css" />
</head>

<body>
  <!--Navbar-->
  <header>
    <!--Nav Container-->
    <div class="nav container">
      <i class="bx bx-menu" id="menu-icon"></i>
      <a href="index.php" class="logo">Sport<span>Cars</span></a>
      <ul class="navbar">
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
    echo '<a href="car_registration.php">Registration</a>';
    echo '<a href="sellerpage.php">Seller </a>';
    // echo '<a href="search.php">Search</a>';
    echo '<a href="about-us.php">About Us</a>';




}
?>

      </ul>
    </div>
  </header>
  <div class="login">
    <h1>Login</h1>
    <form action="loginsubmit.php" method="POST">
      <label>Username </label><input type="text" name="username" value="" placeholder="Enter Username"
        required /><br /><br />
      <label>Password </label><input type="password" name="password" value="" placeholder="Password"
        required /><br /><br />
      <p style="color:red;">
        <?php
                    if (isset($_GET['error'])) {
                        echo $_GET['error'];
                    }
                    ?>
      </p>
      <input type="submit" value="Login" />
    </form>
  </div>
</body>

</html>