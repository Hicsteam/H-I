<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $id=$_GET['id'];
    $up=mysqli_query($con, "select * from products where id = $id");
    $data=mysqli_fetch_array($up);
    
    
    
    
    
    ?>


    <center>

    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>update products</h2>
            <input type="text" name='id' value='<?php echo $data['id'] ?>'>
            <br>
            <input type="text" name='name' value='<?php echo $data['name'] ?>'>
            <br>
            <input type="text" name="price"value='<?php echo $data['price'] ?>' >
            <br>
            <input type="file" id="file" name="image" style="display:none">
            <label for="file">update product image</label>
            <button name="update" type="submit">update product </button>
            <br><br>
            <a href="products.php"> View All products</a> </form>
    </div>
    <p>Developer BY H&I</p>
    </center>
</body>
</html>
