<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>
    
    <form action="upload.php" method="POST" enctype="multipart/form-data"> <!--enctype="multipart/form-data is necessary to upload files in form -->
        <label for="title">Product Name:</label><br>
        <input type="text" name="product_name"><br>
        <label for="price">Price:</label><br>
        <input type="text" name="product_price"><br>
        <label for="description">Description:</label><br>
        <input type="text" name="description"><br>
        <label for="stock">Stock:</label><br>
        <input type="text" name="stock"><br>
        <label for="featured">Featured:</label><br>
        <input type="text" name="featured"><br>
        <label for="img">Image Name:</label><br>
        <input type="file" name="img_name"><br><br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>

</body>
</html>