<?php

if(isset($_POST['username']) && isset($_POST['user_email']) && isset($_POST['user_password'])){
if(!empty(trim($_POST['username'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_password'])){
$username = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['username']));
$user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) { 
$check_email = mysqli_query($db_connection, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");
if(mysqli_num_rows($check_email) > 0){    
$error_message = "Mail ny thuek sai leo pien un mai.";
}
else{
$user_hash_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
$insert_user = mysqli_query($db_connection, "INSERT INTO `users` (username, user_email, user_password, user_level) VALUES ('$username', '$user_email', '$user_hash_password', 'u')");
if($insert_user === TRUE){
$success_message = "Sa muk liep 100.";
}
else{
$error_message = "Mi bun ha bang yang.";
}
}    
}
else {
$error_message = "Mail mg br thuek";
}
}
else{
$error_message = "Pone khor moun la mae poi vang h y";
}
}
?>