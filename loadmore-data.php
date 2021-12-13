<?php
    include 'includes/connection.php'; 
    $con = openCon(); // open connection


    if (isset($_POST['row'])) {
        $start = $_POST['row'];
        $limit = 6;
        $query = "SELECT * FROM `tbl_products` ORDER BY `id` ASC LIMIT ".$start.",".$limit;
        $result = $con->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
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
    }
?>