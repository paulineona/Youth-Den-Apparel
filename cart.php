<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png">
    <link rel="stylesheet" href="public/css/cart.css">
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
                                <a class="nav-link" href="faqs.php">faq</a>
                            </li>
                            <div class="sign-in">
                                <button class="btn-signIn"><a href="sign-up.php">sign in</a></button>
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
                    <div class="navbar-button hamburger">
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- PRODUCT  -->
    <section class="cart">
        <div class="container">
            <div class="bag">
                <h2>your bag</h2>
                <div class="header">
                    <ul>
                        <li>Item</li>
                        <li>Size</li>
                        <li>Quantity</li>
                        <li>Price</li>
                        <li></li>
                    </ul>
                </div>
                <div class="item num1">
                    <ul>
                        <li><img src="public/images/shirts/shirt front only/hightimes.png" alt=""></li>
                        <div class="details">
                            <div class="productName_price">
                                <li class="productName">Hightimes</li>
                                <li class="productPrice">PHP 750.00</li>
                            </div>
                            <li class="size">M</li>
                            <div class="quantity">
                                <li>Quantity: </li>
                                <div class="count">
                                    <li><img id="reduce" class="btn-quantity" src="public/images/icons/remove.png" alt=""></li>
                                    <li>1</li>
                                    <li><img id="add" class="btn-quantity" src="public/images/icons/plus.png" alt=""></li>
                                </div>
                            </div>
                            <li><button class="remove">Remove</button></li>
                        </div>
                    </ul>
                </div>
                <div class="item num2">
                    <ul>
                        <li><img src="public/images/shirts/shirt front only/coffeeclub.png" alt=""></li>
                        <div class="details">
                            <div class="productName_price">
                                <li class="productName">Coffee Club</li>
                                <li class="productPrice">PHP 550.00</li>
                            </div>
                            <li class="size">M</li>
                            <div class="quantity">
                                <li>Quantity: </li>
                                <div class="count">
                                    <li><img id="reduce" class="btn-quantity" src="public/images/icons/remove.png" alt=""></li>
                                    <li>1</li>
                                    <li><img id="add" class="btn-quantity" src="public/images/icons/plus.png" alt=""></li>
                                </div>
                            </div>
                            <li><button class="remove">Remove</button></li>
                        </div>
                    </ul>
                </div>
                <hr class="line">
                <div class="receipt">
                    <div class="subtotal">
                        <p class="title">subtotal</p>
                        <p class="price">PHP 1300.00</p>
                    </div>
                    <div class="shipping">
                        <p class="title">shipping</p>
                        <p>Calculated at checkout</p>
                    </div>
                </div>
                <div class="checkout">
                    <button class="btn-checkout"><a href="checkout.php">continue to checkout</a></button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <script src="public/js/hamburger.js"></script>

</body>
</html>