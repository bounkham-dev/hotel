<?php


include 'db_connection.php';

    
    
if(isset($_GET['id'])){
 $sql = "SELECT * FROM product_details WHERE id =" .$_GET['id'];
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $name = $_POST['name'];
 $brand = $_POST['brand'];
 $price = $_POST['price'];
 $ram = $_POST['ram'];
 $storage = $_POST['storage'];
 $sue = $_POST['sue'];
 $image = $_POST['image'];
 $quantity = $_POST['quantity'];
 $update = "UPDATE product_details SET name='$name', brand='$brand',price='$price',ram='$ram',storage='$storage',sue='$sue', image='$image',quantity='$quantity' WHERE id=". $_GET['id'];
 $result = mysqli_query($db_connection, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: manage.php");
 }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
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
button {
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


<div class="container"  style="width: 30%; font-size:15px;">
    <form method="post">
<h1 style="text-align:center;">Edit Information</h1><br><br>
<div class="form-group" style=" text-align: center;">
<label>Name:</label><input class="id form-control" type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>"><br/><br/>
<label>Brand:</label><input class="id form-control" type="text" name="brand" placeholder="Brand" value="<?php echo $row['brand']; ?>"><br/><br/>
<label>Price:</label><input class="id form-control" type="text" name="price" placeholder="Price" value="<?php echo $row['price']; ?>"><br/><br/>
<label>RAM:</label><input class="id form-control" type="text" name="ram" placeholder="RAM" value="<?php echo $row['ram']; ?>"><br/><br/>
<label>Storage:</label><input class="id form-control" type="text" name="storage" placeholder="Storage" value="<?php echo $row['storage']; ?>"><br/><br/>
<label>Detail:</label><input class="id form-control" type="text" name="sue" placeholder="sue" value="<?php echo $row['sue']; ?>"><br/><br/>
<label>Image Code:</label><input class="id form-control" type="text" name="image" placeholder="image" value="<?php echo $row['image']; ?>"><br/><br/>
<label>Quantity:</label><input class="id form-control" type="text" name="quantity" placeholder="quantity" value="<?php echo $row['quantity']; ?>"><br/><br/>
<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="manage.php"><button type="button" value="button">Cancel</button></a>
</form>
</div>
</div>
<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>




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


