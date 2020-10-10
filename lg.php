<?php
session_start();
require 'db_connection.php';
require 'login.php';

if(isset($_SESSION['user_email'])){
header('Location: index1.php');
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
  
</head>
<style>
form {
    border: 3px solid #f1f1f1;
    max-width: 410px;
    margin: 0 auto;

}

input[type=email],
input[type=password] {

    padding: 12px 20px;
    margin: 8px 0;
 width:370px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {

}

button:hover {
    opacity: 0.8;
}

.Regbtn {
    width: 370px;
    padding: 10px 18px;
    background-color: #0077c8;
}


.error_message {
    color: red;
    padding-bottom: 10px;
    text-align: center;
    font-weight: bold;
}

.success_message {
    color: green;
    padding-bottom: 10px;
    text-align: center;
    font-weight: bold;
}

form .container {
    padding: 16px;
    width: 405px;
}

@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .Regbtn {
        width: 100%;
    }
}

.footer {
    padding: 50px 0 20px 0;
    background-color: #D3D3D3;
    color: #000000;
}

.footer .title {
    text-align: left;
    color: black;
    font-size: 25px;
}

.footer .social-icon {
    padding: 0px;
    margin: 0px;
}

.footer .social-icon a {
    display: inline-block;
    color: black;
    font-size: 25px;
    padding: 5px;
}

.footer .acount-icon a {
    display: block;
    color: black;
    font-size: 18px;
    padding: 5px;
    text-decoration: none;
}

.footer .acount-icon .fa {
    margin-right: 25px;
}

.footer .category a {
    text-decoration: none;
    color: black;
    display: inline-block;
    padding: 5px 20px;
    margin: 1px;
    border-radius: 4px;
    margin-top: 6px;
    background-color: transparent;
    border: solid 1px black;
}

.footer .payment {
    margin: 0px;
    padding: 0px;
    list-style-type: none
}

.footer .payment li {
    list-style-type: none
}

.footer .payment li a {
    text-decoration: none;
    display: inline-block;
    color: black;
    float: left;
    font-size: 25px;
    padding: 10px 10px;
}

hr {
    border: 0 solid #000000;
    border-top-width: 1px;
    height: 0;
    margin: 60px auto;
    clear: both;
    display: block;
    width: auto;
    position: relative;
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
                <a class="navbar-brand" href="index1.php">LDC</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index1.php">Home</a></li>
                    <li class="dropdown"><a class="nav-link" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="index.php">All Product</a></li>
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
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="search/search.html"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="panel panel-center login_box">
        <div class="panel-heading text-left">
        <form action="" method="post">
<h2 style="margin:10px;">Create an account</h2>

<div class="container">
<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit" style="    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 370px;">Login</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" style="background-color:#D3D3D3D3">
<a href="register.php"><button type="button" class="Regbtn" style="color:white;">Create an account</button></a>
</div>
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