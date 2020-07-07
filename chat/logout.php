<?php 
session_start();
include ('Chat.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['id'], 0);
$_SESSION['email'] = "";
$_SESSION['id']  = "";
$_SESSION['login_details_id']= "";
header("Location: /");
?>






