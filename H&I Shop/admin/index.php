<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>

    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>Websit online Shop</h2>
            <img src="logo.png" alt="Logo"width="450px">
            <input type="text" name='name'>
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="image" style="display:none">
            <label for="file">upload image</label>
            <button name="upload">upload Product 🛅</button>
            <br><br>
            <a href="products.php"> View All products</a> </form>
    </div>
    <p>Developer BY H&I</p>
    </center>
</body>
</html>
