<?php 

    include 'includes/connection.php'; 

    $con = openCon(); // open connection
    $dbSelected = $con->select_db('youthden_ecommerce'); // select database
    if (!$dbSelected) {
        die("Can\'t use test_db : " . mysql_error());
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png" />
    <link rel="stylesheet" href="public/css/catalog.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="sticky">
            <div class="container navbar">
                <div class="navbar-left">
                    <div class="navbar-logo">
                        <a href="index.php"><img src="public/images/logo/logo-arvene-ver.png" alt="logo" /></a>
                    </div>
                    <div class="overlay">
                        <ul class="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="catalog.php">shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faqs.php">faq</a>
                            </li>
                            <div class="sign-in">
                                <button class="btn-signIn">
                                    <a href="sign-up.php">sign in</a>
                                </button>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-button icon1">
                        <a href="cart.php"></a>
                    </div>
                    <div class="navbar-button icon2">
                        <a href="sign-up.php"></a>
                    </div>
                    <div class="navbar-button hamburger"></div>
                </div>
            </div>
        </nav>
    </header>

    <!-- CATALOG-->
    <section class="shop">
        <div class="container">
            <div id="title">Shop</div>
            <div id="subtitle">t-shirts</div>
            <div class="cards">
            <?php
                $count_query = "SELECT count(*) FROM tbl_products";
                $count_result = $con->query($count_query);
                $count_fetch = mysqli_fetch_array($count_result);
                $postCount = $count_fetch;
                $limit = 6;
    
                $query = "SELECT * FROM `tbl_products` ORDER BY `id` ASC LIMIT 0, " . $limit;  
                $result = $con->query($query);
            
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_array()){ 
                        echo "<div class=\"card\">";
                            $img = "admin/images/" . $row['img_name'];
                            echo "<img src=$img alt=\"\" class=\"card__image\" />";
                            echo "<div class=\"card__content\">";
                                echo "<p class=\"name\">" . $row['product_name'] . "</p>";
                                echo "<p class=\"price\">Php. " . $row['product_price'] . ".00</p>";
                                echo "<button class=\"addtocart\"><a href=\"cart.php\">add to cart</a></button>";
                            echo "</div>";
                        echo "</div>";
                    }
                }

            ?>
            </div>
            <div class="shop">
                <input type="button" class="btn-shop" id="loadBtn" value="Load More">
                <input type="hidden" id="row" value="0">
                <input type="hidden" id="postCount" value="<?php echo $postCount; ?>">
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>

    <?php
        closeCon($con); // close connection
    ?>

    <script src="public/js/hamburger.js"></script>

    <script>
      $(document).ready(function () {
        $(document).on('click', '#loadBtn', function () {
          var row = Number($('#row').val());
          var count = Number($('#postCount').val());
          var limit = 6;
          row = row + limit;
          $('#row').val(row);
          $("#loadBtn").val('Loading...');
        
          $.ajax({
            type: 'POST',
            url: 'loadmore-data.php',
            data: 'row=' + row,
            success: function (data) {
              var rowCount = row + limit;
              $('.cards').append(data);
              if (rowCount >= count) {
                $('#loadBtn').css("display", "none");
              } else {
                $("#loadBtn").val('Load More');
              }
            }
          });
        });
      });
    </script>

</body>

</html>