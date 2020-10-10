<?php
session_start();
require 'db_connection.php';
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: index3.php');
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link rel="stylesheet" href="css/css1.css">
</head>
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
                    <li class="dropdown"><a class="nav-link" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="#">All Product</a></li>
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
                    <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                    <li><a href="index3.php?action=empty"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="search/search.html"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>


    </nav>
<title>Demo Product Project php</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script src="js/search.js"></script>
<link rel="stylesheet" href="css/style.css">

<div class="container">		
	<h1 style="text-align:center;">All Product</h1>
	<?php
	include 'class/Product.php';
	$product = new Product();	
	?>	
	<div class="row">
	<div class="col-md-3">                    
		<div class="list-group">
			<h3>Price</h3>	
			<div class="list-group-item">
				<input id="priceSlider" data-slider-id='ex1Slider' type="text" data-slider-min="1000" data-slider-max="60000" data-slider-step="1" data-slider-value="14"/>
				<div class="priceRange">1000 - 60000</div>
				<input type="hidden" id="minPrice" value="0" />
				<input type="hidden" id="maxPrice" value="60000" />                  
			</div>			
		</div>    
		<div class="list-group">
			<h3>Brand</h3>
			<div class="brandSection">
				<?php
				$brand = $product->getBrand();
				foreach($brand as $brandDetails){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="productDetail brand" value="<?php echo $brandDetails["brand"]; ?>"  > <?php echo $brandDetails["brand"]; ?></label>
				</div>
				<?php }	?>
			</div>
		</div>
		<div class="list-group">
			<h3>RAM</h3>
			<?php			
			$ram = $product->getRam();
			foreach($ram as $ramDetails){	
			?>
			<div class="list-group-item checkbox">
			<label><input type="checkbox" class="productDetail ram" value="<?php echo $ramDetails['ram']; ?>" > <?php echo $ramDetails['ram']; ?> GB</label>
			</div>
			<?php    
			}
			?>
		</div>    
		<div class="list-group">
			<h3>Storage</h3>
			<?php
			$storage = $product->getStorage();
			foreach($storage as $storageDetails){	
			?>
			<div class="list-group-item checkbox">
			<label><input type="checkbox" class="productDetail storage" value="<?php echo $storageDetails['storage']; ?>"  > <?php echo $storageDetails['storage']; ?> GB</label>
			</div>
			<?php
			}
			?> 
		</div>
	</div>
    
	<div class="col-md-9">
	 <br />
		<div class="row searchResult">
		</div>
	</div>
  </div>
  </div>
</div>

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






