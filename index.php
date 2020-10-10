<?php 
session_start();
include('inc/header.php');
?>
<title>Demo Product Project php</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="js/cart.js"></script>
<script src="js/search.js"></script>
<link rel="stylesheet" href="css/style.css">
<?php include('inc/container.php');?>
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






