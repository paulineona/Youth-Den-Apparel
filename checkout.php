<?php 

    include 'includes/connection.php'; 

    $con = openCon(); // open connection
    $dbSelected = $con->select_db('youthden_ecommerce'); // select database
    if (!$dbSelected) {
        die("Can\'t use test_db : " . mysql_error());
    }

session_start();

 ?>



 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="public/images/logo/logo-arvene-ver.png" />
    <link rel="stylesheet" href="./public/css/checkout.css" />
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
                                <a class="nav-link" href="shop.php">shop</a>
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

       <!-- CHECKOUT-->
    <section class="checkout">
      <div class="container">
        <div id="title">checkout</div>
        <div id="subtitle">billing details</div>
        <div class="d-flex">
         <form action="cust_info.php" method="POST" id="checkout-form">
            <input type="text" name="cust_name" placeholder="Name" autocomplete="off"/>
            <input type="email" name="cust_email" placeholder="Email Address" autocomplete="off" />
            <input type="text" name="cust_address" placeholder="Address" autocomplete="off"/>
            <input type="text" name="cust_phone" placeholder="Phone Number" autocomplete="off" />
             <button type="submit" name="placeorder" class="placeorder" id="placeorder"><a href="#payment">place order</a></button>
          </form>
           <div id="payment" class="modal">
    <div class="modal__content">
        <div id="title">Payment Succesful</div>
        <div id="subtitle">Thank You!</div>

        <p>
            <br>An automated payment receipt has been sent to your email.<br> Have a nice day and stay safe fellow youth!

        </p>

        <div class="modal__footer">
            <div id="subtitle">-youthden.<br></div>
        </div>

        <a href="#" class="modal__close">&times;</a>
    </div>
</div>
          <div class="order">
          
          
                        <?php 

                        $total_price = 0;

                            if (!empty($_SESSION['cart'])) {
                        
                                foreach ($_SESSION['cart'] as $key => $value) { ?>
                                <tr>
                                    <td><?php $value['id']; ?></td>
                                    <td><?php $value['product_name']; ?></td>
                                    <td><?php $value['quantity']; ?></td>
                                    <td><?php $value['product_price']; ?></td>
                                    <td>
                                    </td> 
                                </tr>

                             <?php $total_price = $total_price + $value['quantity'] * $value['product_price']; ?>                        
                        <?php }

                    }else { ?>
                        <tr>
                            <td colspan="5" class="tbl-nodata">NO ITEM SELECTED</td>
                        </tr>
                    <?php }
                 ?>

            <table>
              <tr>
                <th colspan="2">Your order</th>
              </tr>
              <tr>
                <td id="total">Total</td>
                <td id="price"><?php echo number_format($total_price,2); ?></td>
              </tr>
            </table>
    
          </div>
        </div>
      </div>
    </section>


    <?php include 'includes/footer.php' ?>

    <script src="public/js/app.js"></script>
    <script src="public/js/hamburger.js"></script>
      <script>function submit() { 
        document.getElementById("checkout-form").reset(); 
        } 
    </script>
</body>

</html>