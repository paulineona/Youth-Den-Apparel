<?php
    include '../connection.php'; 

    
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="icon" href="assets/img/logo.png" type="icon" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    
    <title>Products</title>
</head>
<body id="body-pd">
    
   <!-- header -->
   <header class="header" id="header">
    <div class="header__toggle">
      <i class="bx bx-menu" id="header-toggle"></i>
    </div>

    <div class="header__img">
      <img src="assets/img/profile pic.png" alt="" />
    </div>
  </header>

  <!-- sidebar-->
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <a href="index.html" class="nav__logo">
          <img src="assets/img/logo.png" />
          <span class="nav__logo-name">Youth Den</span>
        </a>

        <div class="nav__list">
          <a href="index.html" class="nav__link">
            <i class="bx bx-grid-alt nav__icon"></i>
            <span class="nav__name">Dashboard</span>
          </a>
          <a href="products.php" class="nav__link active">
            <i class="bx bx-shopping-bag nav__icon"></i>
            <span class="nav__name">Products</span>
          </a>

          <a href="customers.html" class="nav__link">
            <i class="bx bx-group nav__icon"></i>
            <span class="nav__name">Customers</span>
          </a>

          <a href="orders.html" class="nav__link">
            <i class="bx bx-basket nav__icon"></i>
            <span class="nav__name">Orders</span>
          </a>

          <a href="staff.html" class="nav__link">
            <i class="bx bx-user-circle nav__icon"></i>
            <span class="nav__name">Our Staff</span>
          </a>

          <a href="setting.html" class="nav__link">
            <i class="bx bx-cog nav__icon"></i>
            <span class="nav__name">Settings</span>
          </a>
        </div>
      </div>
      <a href="#" class="nav__link">
        <i class="bx bx-log-out nav__icon"></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>

  <!-- products -->
  <div class="container">
    <h1>Products</h1>
    <div class="products">
      <div class="products-banner">
        <div class="search-container">
          <input class="search-input" type="text" placeholder="Search by product name">
        </div>
        <div class="addProduct-container">
          <button class="btn-addProduct"><a href="" type="button">Add Product</a></button>
        </div>
      </div>
      <div class="products-table">
        <table>
          <thead>
            <tr>
              <th class="title">ID</th>
              <th class="title">Product Name</th>
              <th class="title">Price</th>
              <th class="title">Stock</th>
              <th class="title">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($row = $result->fetch_array()) { // fetch data in sql
                  echo "<tr>";
                      $img = "../images/" . $row['img_name'];
                      echo "<td class=\"data\">" . $row['id'] . "</td>";
                      echo "<td class=\"img-center\">" . "<img id=\"image\" src=$img>" . $row['product_name'] . "</td>";
                      echo "<td class=\"data\"> Php. " . $row['product_price'] . ".00</td>";
                      echo "<td class=\"data\">" . $row['stock'] . "</td>";
                      echo "<td class=\"data\"><a href=\"../productsEdit.php?id=" . $row['id'] . "\"><img id=\"editBtn\" src=\"assets/img/edit.png\" alt=\"\"></a>
                              <a href=\"../productsDelete.php?id=" . $row['id'] . "\"><img id=\"deleteBtn\" src=\"assets/img/bin.png\" alt=\"\"></a></td>";
                  echo "</tr>\n";
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="page-container">
        <?php
          $prQuery = "SELECT * FROM tbl_products"; 
          $prResult = $con->query($prQuery);         

          $totalRecord = $prResult->num_rows; // total number of rows in database
          $totalPage = ceil($totalRecord / $numPerPage); // ceil will convert to the whole number ex. 2.4 => 3

          echo "<ul>";
            if ($page > 1) {
                echo "<li><a href='../dashboard/products.php?page=".($page-1)."' class='btn-page prev'></a></li>";
            }
          
            for ($i=1; $i < $totalPage; $i++) { 
                echo "<li><a href='../dashboard/products.php?page=".$i."'>$i</a></li>";
            }
          
            if ($i > $page) {
                echo "<li><a href='../dashboard/products.php?page=".($page+1)."' class='btn-page next'></a></li>";
            }
          echo "</ul>";
        ?>
      </div>
    </div>
  </div>

  <div class="modal">
    <img class="modal-close" src="assets/img/cancel.png" alt="">
    <div class="addProduct-modal">
      <h3>Add Products</h3>
      <h4>Add your product and necessary information here</h4>
      <form action="../upload.php" method="POST" enctype="multipart/form-data"> <!--enctype="multipart/form-data is necessary to upload files in form -->
        <div class="item">
          <label for="img">Product Image</label>
          <button class="img-input"><img src="assets/img/upload.png" alt="" onclick="click_the_button(files);">Drag your image here</button>
          <input id="insertFile" type="file" name="img_name">
        </div>
        <div class="item">
          <label for="title">Product Name</label>
          <input id="productNameInput" type="text" name="product_name" placeholder="Product Name">
        </div>
        <div class="item">
          <label for="price">Price</label>
          <input id="productPrice" type="text" name="product_price" placeholder="Price">
        </div>
        <div class="item">
          <label for="description">Description</label>
          <textarea name="description" id="description" cols="30" rows="10" placeholder="Product Details"></textarea>
        </div>
        <div class="item">
          <label for="stock">Stock</label>
          <input type="text" id="productQuantity"name="stock" placeholder="Product Quantity">
        </div>
        
        <button id="btn-submit" type="submit" name="submit" value="submit">Add Product</button>
      </form>
    </div>
  </div>

  <?php
    closeCon($con); // close connection
  ?>

  <script src="assets/js/main.js"></script>

</body>
</html>