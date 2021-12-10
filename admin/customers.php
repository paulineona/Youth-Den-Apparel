<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="icon" href="includes/assets/img/logo.png" type="icon" />
    <link rel="stylesheet" href="includes/assets/css/styles.css" />
    <link rel="stylesheet" href="includes/assets/css/resets.css" />
    <link rel="stylesheet" href="includes/assets/css/headerSidebar.css" />
    <title>Customers</title>
  </head>
  <body id="body-pd">

    <?php include 'includes/header.php' ?>
    <?php include 'includes/navBar.php' ?>

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
                    <a href="#"><img id="shopBtn" src="includes/assets/img/product.png" alt=\\></a>
                    <a href="#"><img id="deleteBtn" src="includes/assets/img/bin.png" alt=\\></a>
                  </td>
                </tr>
                <tr>
                  <td class="data">2</td>
                  <td class="data">Leslie Alexander</td>
                  <td class="data">leslie@example.com</td>
                  <td class="data">F Cabin Road, 05 Baliram</td>
                  <td class="data">
                    <a href="#"><img id="shopBtn" src="includes/assets/img/product.png" alt=\\></a>
                    <a href="#"><img id="deleteBtn" src="includes/assets/img/bin.png" alt=\\></a>
                  </td>
                </tr>
              </tbody>
          </div>
      </div>
    </div>

    <script src="includes/assets/js/main.js"></script>
  </body>
</html>
