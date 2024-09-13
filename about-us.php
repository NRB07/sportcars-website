<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/aboutus.css" />


  <title>About US</title>

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
        //starting the session
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
    echo '<a href="car_registration.php">Registration</a>';
    echo '<a href="sellerpage.php">Seller </a>';
    // echo '<a href="search.php">Search</a>';
    echo '<a href="about-us.php">About Us</a>';



}
?>
        <!-- <li><a href="car_registration.php">Registration</a></li>
        <li><a href="sellerpage.php">Seller </a></li>
        <li><a href="about-us.php" class="active">About Us</a></li>
        <li><a href="search.php">Search</a></li> -->
      </ul>

    </div>
  </header>
  <div class="heading">
    <h1 style="text-align: center;">About Us</h1>
    <img src="./images/aboutus.jpg">
    <div class="content">
      <h2>About Us</h2>
      <p>Welcome to SportCars, your trusted destination for all your automotive needs. Our mission is to provide a
        seamless platform for car buyers and sellers to connect, making the car buying and selling process easy,
        efficient, and enjoyable.</p>

      <p>At Online Car Sale, we are passionate about cars, and our team of dedicated professionals is committed to
        delivering the best experience to our users. Here's what sets us apart:</p>

      <ul>
        <li><strong>Wide Selection:</strong> Explore a diverse range of cars, from compact sedans to powerful SUVs, all
          in one place.</li>
        <li><strong>Easy Buying and Selling:</strong> Our user-friendly platform simplifies the process, whether you're
          buying your dream car or selling your current one.</li>
        <li><strong>Local and Global Reach:</strong> Connect with buyers and sellers in your area or expand your reach
          worldwide.</li>
        <li><strong>Expert Support:</strong> Our dedicated support team is here to assist you every step of the way.
        </li>
      </ul>

      <p>Thank you for choosing SportCars. We're excited to be part of your car journey!</p>
      <p>We are located in 102 glover street, Parramatta 2150.</p>
      </section>
      </h2>
    </div>
  </div>
</body>

</html>