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
        <li><a href="search.php">Search</a></li>
      </ul>
    </div>
  </header>

  <h1 style="text-align: center;">Search Result Information:</h1>

  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $carId = $_GET["id"];
    $sql = "SELECT * FROM carinfo WHERE id = '$carId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $imageName = $row["image"];
            $imagePath = "uploads/" . $imageName;

            $sqlForSellerName = "SELECT * FROM users WHERE id = '$row[user_id]'";
            $resultForSellerName = $conn->query($sqlForSellerName);
            $rowForSellerName = $resultForSellerName->fetch_assoc();

            // $sellerName = $rowForSellerName['username'];
    ?>

  <div class="card">
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

        <button class="open-button" onclick="openForm()">Buy</button>

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