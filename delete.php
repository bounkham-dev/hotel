
<?php
require('db_connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM product_details WHERE id=$id"; 
$result = mysqli_query($db_connection,$query) or die ( mysqli_error());
header("Location: manage.php"); 
?>