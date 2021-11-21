<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png">
    <link rel="stylesheet" href="public/css/product.css">
</head>
<body>
    
    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav class="sticky">
            <div class="container navbar">
                <div class="navbar-left">
                    <div class="navbar-logo">
                        <a href="index.php"><img src="public/images/logo/logo-arvene-ver.png" alt="logo"></a>
                    </div>
                    <div class="overlay">
                        <ul class="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">faq</a>
                            </li>
                            <div class="sign-in">
                                <button class="btn-signIn"><a href="sign-up.php">sign in</a></button>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-button icon1">
                    </div>
                    <div class="navbar-button icon2">
                        <a href="sign-up.php"></a>
                    </div>
                    <div class="navbar-button hamburger">
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- PRODUCT  -->
    <section class="product">
        <div class="container">
            <div class="hero">
                <div class="shirt">
                    <img src="public/images/shirts/shirt front only/coffeeclub.png" alt="">
                </div>
                <div class="right">
                    <div class="info">
                        <h2 class="title">coffee club</h2>
                        <p class="price">PHP 450.00</p>
                    </div>
                    <div class="description">
                        <h3>Description</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut corrupti porro officiis ipsum facere dolores quisquam dolor repellendus quasi veniam officia vel, nostrum sit amet beatae suscipit explicabo omnis natus.</p>
                    </div>
                    <div class="size">
                        <p>Choose Size: </p>
                        <span>S</span><span>M</span><span>L</span><span>XL</span>
                    </div>
                    <hr class="line">
                    <div class="quantity">
                        <p>Quantity </p>
                        <div class="count">
                            <img id="reduce" class="btn-quantity" src="public/images/icons/remove.png" alt="">
                            <span>1</span>
                            <img id="add" class="btn-quantity" src="public/images/icons/plus.png" alt="">
                        </div>
                    </div>
                    <hr class="line">
                    <div class="bag">
                        <button class="btn-bag"><a href="checkout.php">add to bag</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECOMMEND -->
    <section class="recommend">
        <div class="container">
            <h2 class="line">We Also Recommend</h2>
            <div class="shirts">
                <div class="shirt">
                    <img src="public/images/shirts/shirt front only/hightimes.png" alt="">
                    <div class="info">
                        <h2 class="title">hightimes</h2>
                        <p class="price">PHP 550.00</p>
                    </div>
                </div>
                <div class="shirt">
                    <img src="public/images/shirts/shirt front only/NANKINMUSHI.png" alt="">
                    <div class="info">
                        <h2 class="title">NANKINMUSHI</h2>
                        <p class="price">PHP 650.00</p>
                    </div>
                </div>
                <div class="shirt">
                    <img src="public/images/shirts/shirt front only/seahorse.png" alt="">
                    <div class="info">
                        <h2 class="title">seahorse</h2>
                        <p class="price">PHP 450.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer">
                <div class="newsletter">
                    <h3>newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aliquid!</p>
                    <div class="email">
                        <input type="email" name="email" id="" placeholder="Your email address">
                        <a href="">subscribe</a>
                    </div>
                </div>
                <div class="nav">
                    <ul class="menu">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">faq</a>
                        </li>
                    </ul>
                </div>
                <div class="socials">
                    <ul class="menu">
                        <li class="social-item">
                            <a class="social-link" href="https://www.facebook.com/" target="_blank">facebook</a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="https://www.twitter.com/" target="_blank">twitter</a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="https://www.instagram.com/" target="_blank">instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="yd-contact">
                    <div class="footer-logo">
                        <a href="#"><img src="public/images/logo/logo-arvene-ver.png" alt="logo"></a>
                    </div>
                    <div class="contacts">
                        <p>Youth Den Store, No.101 Lipa City, Malvar, Batangas</p>
                        <p>Youthden@gmail.com</p>
                        <p>+234-818-134-6000</p>
                    </div>
                </div>
            </div>
            <p class="all-rights">© 2021 youthden. All rights reserved</p>
        </div>
    </footer>

    <script src="public/js/hamburger.js"></script>

</body>
</html>