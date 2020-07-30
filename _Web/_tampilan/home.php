<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGOUT</title>
</head>
<body>
      <tr>
        <td><br><a href="dashboard.php">HOME</a></td></br>
        <td><a href="logout.php">LOGOUT</a></td>
      </tr>
</body>
</html>
