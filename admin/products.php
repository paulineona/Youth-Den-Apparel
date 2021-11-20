<?php
    include 'connection.php'; 

    
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $numPerPage = 4;
    $startFrom = ($page - 1) * $numPerPage;

    
    $con = openCon(); // open connection
    $dbSelected = $con->select_db('youthden_ecommerce'); // select database
    if (!$dbSelected) {
        die("Can\'t use test_db : " . mysql_error());
    }
    $query = "SELECT * FROM tbl_products LIMIT $startFrom, $numPerPage"; // LIMIT 0, 4 
    $result = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="card-body container">
        <table>
            <thead>
                <tr>
                    <th class="title">ID</th>
                    <th class="title">Product Name</th>
                    <th class="title">Price</th>
                    <th class="title">Stock</th>
                    <th class="title">Actions</th>
                </tr>
            </thead>
            <tbdody>
                <?php
                    while ($row = $result->fetch_array()) { // fetch data in sql
                        echo "<tr>";
                            $img = "images/" . $row['img_name'];
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td class=\"img-center\">" . "<img id=\"image\" src=$img>" . $row['product_name'] . "</td>";
                            echo "<td> Php. " . $row['product_price'] . ".00</td>";
                            echo "<td>" . $row['stock'] . "</td>";
                            echo "<td>E D</td>";
                        echo "</tr>\n";
                    }
                ?>
            </tbdody>
        </table>       
        <div class="page-container">
            <ul>
                <?php
                    $prQuery = "SELECT * FROM tbl_products"; 
                    $prResult = $con->query($prQuery);         

                    $totalRecord = $prResult->num_rows; // total number of rows in database
                    $totalPage = ceil($totalRecord / $numPerPage); // ceil will convert to the whole number ex. 2.4 => 3

                    if ($page > 1) {
                        echo "<li><a href='index.php?page=".($page-1)."' class='page previous'>Previous</a></li>";
                    }

                    for ($i=1; $i < $totalPage; $i++) { 
                        echo "<li><a href='index.php?page=".$i."' class='page'>$i</a></li>";
                    }

                    if ($i > $page) {
                        echo "<li><a href='index.php?page=".($page+1)."' class='page previous'>Next</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>

    <?php
        closeCon($con); // close connection
    ?>

</body>
</html>

