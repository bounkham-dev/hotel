<?php 
session_start();
require 'db_connection.php';
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: lg.php');
exit;
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="css/css2.css">
</head>
<style>
.submit {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

}


</style>
<body>

    <div class="jumbotron">
        <div class="container text-center">
            <h1>Logo Bolisut</h1>
            <p>khum khuan bolisut</p>
        </div>
    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="index2.php">LDC</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index2.php">Home</a></li>
                    <li class="dropdown"><a class="nav-link" data-toggle="dropdown" href="">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="index3.php">All Product</a></li>
                            <li class="dropdown-item"><a href="#">By Order</a></li>
                            <li class="dropdown-item"><a href="#">Pre Order</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li class="dropdown"><a class="nav-link" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">About Us</a></li>
                            <li class="dropdown-item"><a href="#">Join us</a></li>
                            <li class="dropdown-item"><a href="#">Coperate & government Customers</a></li>
                            <li class="dropdown-item"><a href="#">HeadquaterMap</a></li>
                            <li class="dropdown-item"><a href="#">Warranty Terms</a></li>
                            <li class="dropdown-item"><a href="#">Service Center</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="lg.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="search/search.html"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>


    </nav>

<div class="all-product">

<h2>All Product</h2>
<br><br>
<?php $sql = "SELECT * FROM product_details";
if($result = mysqli_query($db_connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">RAM</th>
      <th scope="col">Storage</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
  
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['price']?></td>
      <td><?php echo $row['ram']?></td>
      <td><?php echo $row['storage']?></td>
      <td><?php echo $row['sue']?></td>
      <td><?php echo $row['image']?></td>
      <td><?php echo $row['quantity']?></td>
    <td>
<a href="delete.php?id=<?php echo $row["id"];?>" >Delete</a>
</td>
      <td><a href="edit.php?id=<?php echo $row['id']; ?>" >Edit</a></td>


    </tr>

      <?php 
    }?>
    
  </tbody>
</table>
    <?php  } 
    
    }?>

    </div>
<br><br>
<h2>Manage</h2><br><br>
<div class="manage">
    <div class="container" style="width: 30%;">

<form action="manage.php" method="post">
  <div class="form-group" style=" text-align: center;">
    <label for="id">ID</label>
    <input type="id" class="id form-control" id="id" name ="id" placeholder="Product ID">
    <label for="id">Name</label>
    <input type="id" class="id form-control" id="name" name ="name"  placeholder="Product Name">
    <label for="id">Brand</label>
    <input type="id" class="id form-control" id="brand" name ="brand"  placeholder="Product Brand">
    <label for="id">Price</label>
    <input type="id" class="id form-control" id="price" name ="price"  placeholder="Product Price">
    <label for="id">RAM</label>
    <input type="id" class="id form-control" id="ram" name ="ram"  placeholder="Product RAM">
    <label for="id">Storage</label>
    <input type="id" class="id form-control" id="storage" name ="storage"  placeholder="Product Storage">
    <label for="id">Details</label>
    <input type="id" class="id form-control" id="detail" name ="detail"  placeholder="Product Details">
    <label for="id">Image Code</label>
    <input type="id" class="id form-control" id="img" name ="img"  placeholder="Product Image">
    <label for="id">Quantity</label>
    <input type="id" class="id form-control" id="qty" name ="qty"  placeholder="Product Quantity">
  </div>
 <center><input type="submit" id="submit" class="submit" name="submit" value="Insert Product"></center>
 <?php 




if(isset($_POST['submit'])==1){
    $sql = "INSERT INTO product_details (id, name, brand, price, ram, storage, sue, image, quantity, status)
     VALUES ('".$_POST["id"]."', '".$_POST["name"]."', '".$_POST["brand"]."', '".$_POST["price"]."', '".$_POST["ram"]."', '".$_POST["storage"]."', '".$_POST["detail"]."', '".$_POST["img"]."', '".$_POST["qty"]."', '1')";
    $result= (mysqli_query($db_connection,$sql));

    mysqli_close($db_connection);
} 


?>

</form>



</div>
</div>

<br><br>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4 class="title">About us</h4>
                    <p>wefwpoe powe owe [we weo fkwpeo kwpeojw ojwpoejw[eo jfw[odfjowkgw[pekw[e k[ kwe[ ofkweo jw[ofj w[oej [oej </p>
                    <ul class="social-icon">
                        <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">My Account</h4>
                    <span class="acount-icon">          
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> List</a>
                <a href="#"><i class="fa fa-users" aria-hidden="true"></i>Group</a>
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
                <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Language</a>           
                </span>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Category</h4>
                    <div class="category">
                        <a href="#">PC</a>
                        <a href="#">Notebooks</a>
                        <a href="#">Accessories</a>
                        <a href="#">Mobiles</a>
                        <a href="#">Cameras</a>
                        <a href="#">Hardwares</a>
                        <a href="#">Speakers</a>
                        <a href="#">Softwares</a>
                        <a href="#">Gaming Gears</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Payment</h4>
                    <p>aef we[p[ mw[home r[omwr[ omw[epfkw[pekf]qpek p[k ]pqkef ]qpekf [pqekf</p>
                    <ul class="payment">
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row text-center"><a href="#" style="color: black;">Copyright © Created By ByeBye Co.,Ltd</a></div>
        </div>
    </footer>
</body>

</html>
