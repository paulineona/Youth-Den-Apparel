<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="icon" href="assets/img/logo.png" type="icon" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Customers</title>
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
            <a href="products.php" class="nav__link">
              <i class="bx bx-shopping-bag nav__icon"></i>
              <span class="nav__name">Products</span>
            </a>

            <a href="customers.php" class="nav__link active">
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

            <a href="setting.php" class="nav__link">
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

    <!-- customers-->
  <div class="container">
    <h1>Customers</h1>
    <div class="customers">
        <div class="customers-table">
          <table>
            <thead>
              <tr>
                <th class="title">ID</th>
                <th class="title">Name</th>
                <th class="title">Email</th>
                <th class="title">Address</th>
                <th class="title">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="data">1</td>
                <td class="data">Marvin Mckinney</td>
                <td class="data">marvin@example.com</td>
                <td class="data">Uttara Sector 12, Road 4, House 15</td>
                <td class="data">
                  <a href="#"><img id="shopBtn" src="assets/img/product.png" alt=\\></a>
                  <a href="#"><img id="deleteBtn" src="assets/img/bin.png" alt=\\></a>
                </td>
              </tr>
              <tr>
                <td class="data">2</td>
                <td class="data">Leslie Alexander</td>
                <td class="data">leslie@example.com</td>
                <td class="data">F Cabin Road, 05 Baliram</td>
                <td class="data">
                  <a href="#"><img id="shopBtn" src="assets/img/product.png" alt=\\></a>
                  <a href="#"><img id="deleteBtn" src="assets/img/bin.png" alt=\\></a>
                </td>
              </tr>
            </tbody>
        </div>
    </div>
  </div>
    <script src="assets/js/main.js"></script>
  </body>
</html>
