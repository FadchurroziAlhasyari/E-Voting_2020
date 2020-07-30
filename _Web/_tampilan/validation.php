<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'usermasuk');

$user = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where username = '$user' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $user;
	header('location:home.php');
}else{
	header('location:login.php');
}

?>