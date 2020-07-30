<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistrasi');

$user = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where user = '$user'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username Siap Di gunakan";
}else{
	$reg= " insert into usertable( username , password) values ( '$user' , '$pass')";
	mysqli_query($con, $reg);
	echo "Registrasi Anda Sukses";
}

?>