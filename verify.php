<?php

include "database.php";
session_start();

$username=$_POST['user'];
$userpassword=$_POST['password'];

$qry="SELECT * from admin where user='$username' and password='$userpassword'";

$res=mysqli_query($conn,$qry);

$count=mysqli_num_rows($res);

if ($count>0)
{
	$_SESSION['admin']=$username;
	header("Location:cms_panel.php");
}
else
{
	header("Location:login.php?id=Invalid Details");
}

?>

