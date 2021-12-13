<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png" />
    <link rel="stylesheet" href="./public/css/catalog.css" />
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



    < <!-- CATALOG-->
        <section class="shop">
            <div class="container">
                <div id="title">Shop</div>
                <div id="subtitle">t-shirts</div>
                <div class="cards">
                    <?php
                    include 'includes/connection.php';

                    $con = openCon();
                    $query = "SELECT * FROM tbl_products LIMIT 6";
                    $query_run = mysqli_query($con, $query);
                    $check_product = mysqli_num_rows($query_run) > 0;


                    if ($check_product) {
                        while ($row = mysqli_fetch_assoc($query_run)) {
                    ?>

                    <div class="card">
                        <img src="admin/images/<?php echo $row['img_name'];
                                                        ?>" alt="Product Images" class="card__image" />
                        <div class="card__content">
                            <p class="name"><?php echo $row['product_name']; ?></p>
                            <p class="price">PHP <?php echo $row['product_price']; ?>.00</p>
                            <button class="addtocart"><a href="">Add to cart</a></button>
                        </div>
                    </div>

                    <?php
                        }
                    } else {
                        echo "No product Found";
                    }
                    ?>
                </div>
                <div class="shop">
                    <button class="btn-shop"><a href="">load more</a></button>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php' ?>

        <?php
        closeCon($con);
        ?>


        <script src="public/js/hamburger.js"></script>
</body>

</html>