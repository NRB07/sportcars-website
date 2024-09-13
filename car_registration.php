<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registartion Form</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./css/registration.css" />
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
        <li>
          <a href="car_registration.php" class="active">Registration</a>
        </li>
        <li><a href="sellerpage.php">Seller </a></li>
        <li><a href="about-us.php">About Us</a></li>
        <!-- <li><a href="search.php">Search</a></li> -->
      </ul>
    </div>
  </header>
  <div class="registration-form">
    <h1>Registration Form</h1>

    <form action="register.php" method="POST">
      <label>Full name </label><input type="text" value="" name="name" required /><br />
      <label>Address </label><input type="address" value="" name="address" required /><br />
      <label>Phone Number </label><input type="number" value="" name="phone" required /><br />
      <label>Email </label><input type="email" value="" name="email" required /><br />
      <label>Username </label><input type="text" value="" name="username" required /><br />
      <label>Password </label><input type="password" value="" name="password" required /><br />
      <p style="color:red;">
        <?php
                if (isset($_GET['error'])) {
                    echo $_GET['error'];
                }
                ?>
      </p>
      <input type="submit" value="Registor" />
    </form>
  </div>
</body>

</html>