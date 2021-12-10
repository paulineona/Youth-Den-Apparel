<?php
    include 'connection.php'; 

    
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $numPerPage = 4;
    $startFrom = ($page - 1) * $numPerPage;

    
    $con = openCon(); // open connection
    $dbSelected = $con->select_db('youthden_ecommerce'); // select database
    if (!$dbSelected) {
        die("Can\'t use test_db : " . mysql_error());
    }
    $query = "SELECT * FROM tbl_products LIMIT $startFrom, $numPerPage"; // LIMIT 0, 4 
    $result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="icon" href="includes/assets/img/logo.png" type="icon" />
  <link rel="stylesheet" href="includes/assets/css/styles.css" />
  <link rel="stylesheet" href="includes/assets/css/resets.css" />
  <link rel="stylesheet" href="includes/assets/css/headerSidebar.css" />
  <title>Orders</title>
</head>

<body id="body-pd">
  
  <?php include 'includes/header.php' ?>
  <?php include 'includes/navBar.php' ?>
  
  <!-- orders-->
  <div class="container">
    <h1>Orders</h1>
    <div class="orders">
      <div class="orders-table">
        <table>
          <thead>
            <tr>
              <th class="title">ID</th>
              <th class="title">Name</th>
              <th class="title">Email</th>
              <th class="title">Total</th>
              <th class="title">Date</th>
              <th class="title">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="data">41DE</td>
              <td class="data">Marvin Mckinney</td>
              <td class="data">marvin@example.com</td>
              <td class="data">Php 5,600.00</td>
              <td class="data">Oct. 19, 2021</td>
              <td class="data">
                <a href="#"><img id="editBtn" src="includes/assets/img/edit.png" alt=\\></a>
                <a href="#"><img id="deleteBtn" src="includes/assets/img/bin.png" alt=\\></a>
              </td>
            </tr>
            <tr>
              <td class="data">2323</td>
              <td class="data">Leslie Alexander</td>
              <td class="data">leslie@example.com</td>
              <td class="data">Php 11,540.00</td>
              <td class="data">Oct. 24, 2021</td>
              <td class="data">
                <a href="#"><img id="editBtn" src="includes/assets/img/edit.png" alt=\\></a>
                <a href="#"><img id="deleteBtn" src="includes/assets/img/bin.png" alt=\\></a>
              </td>
            </tr>
          </tbody>
      </div>
    </div>
  </div>

  <?php
    closeCon($con); // close connection
  ?>

  <script src="includes/assets/js/main.js"></script>

</body>
</html>