<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png">
    <link rel="stylesheet" href="public/css/sign-up.css">
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

    <section class="signUp">
        <div class="container">
            <h1 class="title">Create An Account</h1>
            <hr class="line">
            <form class="form" action="">
                <div class="top">
                    <div class="left">
                        <label for="fname">First Name</label><br>
                        <input type="text" name="fname" id="fname"><br>
                    </div>
                    <div class="right">
                        <label for="fname">Last Name</label><br>
                        <input type="text" name="fname" id="fname"><br>
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email"><br>
                    </div>
                    <div class="right">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password"><br>
                    </div>
                </div>
                <div class="btns">
                    <div class="left">
                        <button class="btn-signUp"><a href="">Sign Up</a></button> 
                    </div>
                    <div class="right">
                        <p>Returning Customer?<a href="login.php" class="login">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer">
                <div class="newsletter">
                    <h3>newsletter</h3>
                    <p>Subscribe To Our Newsletter To Receive Our News</p>
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