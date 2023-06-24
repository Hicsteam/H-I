
<!DOCTYPE html>
 <html lang="en">
 <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Products</title>
       <style>
          h3{font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;                
           }
           .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
           }
           .card img{width: 100%;
            height: 200px;

                        }
           main{
            width: 60%;
           }
 

        </style>
    </head>
    <body>
        <center>
          <h3>All  products Available</h3>

        </center>
        <?php
        include('config.php');
        $result=mysqli_query($con,"SELECT * FROM products");
        while($row=mysqli_fetch_array($result)){
             echo "
            <center>
            <main>
               <div class='card'style='width: 15rem;'>
                  <img src='$row[image]' class='card-img-top' >
                   <div class='card-body'>
                       <h5 class='card-title'>$row[name]</h5>
                       <p class='card-text'>$row[price]</p>
                       <a href='update.php? id=$row[id]' class='btn btn-primary'>Update Product </a>
                       <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete Product </a>
                   </div>
                 </div>
            </main>
            <center>
            ";
        }
       
        
        
        
        
        ?>

       
    
    </body>
</html>





