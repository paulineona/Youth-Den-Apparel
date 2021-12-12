<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png" />
    <link rel="stylesheet" href="public/css/catalog.css" />
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
                <div class="card">
                    <img src="public/images/shirts/shirt front only/plantsmusic.png" alt="" class="card__image" />
                    <div class="card__content">
                        <p class="name">PLANTS LIKE MUSIC TOO</p>
                        <p class="price">PHP 450.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="public/images/shirts/shirt front only/wastedyouth_white.png" alt="" class="card__image" />
                    <div class="card__content">
                        <p class="name">wasted youth</p>
                        <p class="price">PHP 450.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="public/images/shirts/shirt with back/nofear_back.png" alt="" class="card__image" />
                    <div class="card__content">
                        <p class="name">no fear</p>
                        <p class="price">PHP 600.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="public/images/shirts/shirt with back/outdoorclub_cream_back.png" alt=""
                        class="card__image" />
                    <div class="card__content">
                        <p class="name">outdoor club</p>
                        <p class="price">PHP 550.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="public/images/shirts/shirt front only/dance.png" alt="" class="card__image" />
                    <div class="card__content">
                        <p class="name">let's dance</p>
                        <p class="price">PHP 450.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
                <div class="card">
                    <img src="public/images/shirts/shirt with back/refresh_back.png" alt="" class="card__image" />
                    <div class="card__content">
                        <p class="name">refresh</p>
                        <p class="price">PHP 700.00</p>
                        <button class="addtocart"><a href="">add to cart</a></button>
                    </div>
                </div>
            </div>
            <div class="shop">
                <button class="btn-shop"><a href="">load more</a></button>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php' ?>

    <script src="public/js/hamburger.js"></script>
</body>

</html>
