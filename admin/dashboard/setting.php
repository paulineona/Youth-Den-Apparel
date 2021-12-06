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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <link rel="icon" href="assets/img/logo.png" type="icon" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Settings</title>
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
        <a href="index.php" class="nav__logo">
          <img src="assets/img/logo.png" />
          <span class="nav__logo-name">Youth Den</span>
        </a>

        <div class="nav__list">
          <a href="index.php" class="nav__link">
            <i class="bx bx-grid-alt nav__icon"></i>
            <span class="nav__name">Dashboard</span>
          </a>
          <a href=" products.php" class="nav__link">
            <i class="bx bx-shopping-bag nav__icon"></i>
            <span class="nav__name">Products</span>
          </a>

          <a href="customers.php" class="nav__link">
            <i class="bx bx-group nav__icon"></i>
            <span class="nav__name">Customers</span>
          </a>

          <a href="orders.php" class="nav__link">
            <i class="bx bx-basket nav__icon"></i>
            <span class="nav__name">Orders</span>
          </a>

          <a href="staff.php" class="nav__link">
            <i class="bx bx-user-circle nav__icon"></i>
            <span class="nav__name">Our Staff</span>
          </a>

          <a href="setting.php" class="nav__link active">
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

  <!-- setting-->
  <div class="container">
    <h1>Edit Profile</h1>
    <div class="setting">
      <div class="setting-table">
        <table>
          <tr>
            <th class="title-setting">Profile Picture</th>
            <td class="data-setting">
              <button class="btn-profileInput" onclick="click_the_button(files);">
                <input id="custom-profile-input" type="file" />
              </button>
            </td>
          </tr>
          <tr>
            <th class="title-setting">Name</th>
            <td class="data-setting">
              <input class="profile-input" type="text" placeholder="Your name" />
            </td>
          </tr>
          <tr>
            <th class="title-setting">Email</th>
            <td class="data-setting">
              <input class="profile-input" type="email" placeholder="Email" />
            </td>
          </tr>
          <tr>
            <th class="title-setting">Staff Role</th>
            <td class="data-setting">
              <select id="role">
                <option value="" disabled selected hidden>Staff role</option>
                <option value="admin">Admin</option>
                <option value="admin">Admin Assistant</option>
              </select>
            </td>
          </tr>
          <tr>
            <th class="title-setting"></th>
            <td class="button-setting">
              <button class="btn-upProfile">
                <a href="#" type="button">Update Profile</a>
              </button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <?php
    closeCon($con); // close connection
  ?>
  
  <script src="assets/js/main.js"></script>

</body>
</html>