<?php 

    include 'connection.php';

    $con = openCon();

    $id = $_GET['id']; // get id through query string
    $query = "SELECT * FROM tbl_products WHERE id='$id'";
    $result = $con->query($query);

    $data = $result->fetch_array();

    if(isset($_POST['update'])) // when click on Update button
    {
        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $featured = $_POST['featured'];
        $file = $_FILES['img_name']; // _FILES get all information from the files that we want to upload using an input from a form

        try {
            $fileName = $file['name']; // to get the name in variable file array
            $fileTmpName = $file['tmp_name']; // to get the temporary location of the file in variable file array
            // $fileSize = $file['size']; // to get the size in variable file array
            // $fileError = $file['error']; // to get the error in variable file array
            $fileType = $file['type']; // to get the type in variable file array
    
            $fileExt = explode('.', $fileName); // we want to separate the name and extension of the file ex. clob.jpeg => clob jpeg
            $fileActualExt = strtolower(end($fileExt)); // end() is an function to get the last piece of data in an array
            $allowed = array('jpg', 'jpeg', 'png'); // allowed extension

            if (in_array($fileActualExt, $allowed)) { // if $fileActualExt is in $allowed array then proceed
                $fileNewName = uniqid('', true).".".$fileActualExt; // we want to avoid file collision, the file new name will be a time format in microseconds
                $fileDestination = 'images/'.$fileNewName;
                
                if (move_uploaded_file($fileTmpName, $fileDestination)) { // to upload the file from temporary location to final destination
                    $sql = "UPDATE `tbl_products` SET `product_name` = '$productName', `product_price` = '$productPrice',
                                                    `description` = '$description', `img_name` = '$fileNewName', `featured` = '$featured',
                                                    `stock` = '$stock' WHERE id='$id'";

                    if ($con->query($sql) === true) { // to check if the insertion of data in database is successfull
                        echo "Records inserted successfully.";
                    } else {
                        unlink($fileDestination);
                        throw new Exception("ERROR: Could not able to execute $sql. " . $con->error);
                    }
                } else {
                    throw new Exception('Failed to upload image file');
                }
            } else {
                throw new Exception('You cannot upload files of this type!');
            }
        } catch (Throwable $th) {
            $errorMessage = $th->getMessage();
            exit($errorMessage);
        }	
        closeCon($con);
        header("location: products.php"); // it will redirect to products.php
    }

?>

<h3>Update Data</h3>

<form method="POST" enctype="multipart/form-data"> <!--enctype="multipart/form-data is necessary to upload files in form -->
    <label for="title">Product Name:</label><br>
    <input type="text" name="product_name" value="<?php echo $data['product_name'] ?>"><br>
    <label for="price">Price:</label><br>
    <input type="text" name="product_price" value="<?php echo $data['product_price'] ?>"><br>
    <label for="description">Description:</label><br>
    <input type="text" name="description" value="<?php echo $data['description'] ?>"><br>
    <label for="stock">Stock:</label><br>
    <input type="text" name="stock" value="<?php echo $data['stock'] ?>"><br>
    <label for="featured">Featured:</label><br>
    <input type="text" name="featured" value="<?php echo $data['featured'] ?>"><br>
    <label for="img">Image Name:</label><br>
    <input type="file" name="img_name" value="<?php echo $data['img_name'] ?>"><br><br>
    <button type="submit" name="update" value="Update">Update</button>
</form>