<?php
 
 $con= mysqli_connect('localhost','root');

 if ($con) {
 	echo "connection sucesseful";
 }else
 {
 	echo "not connected";
 }
mysqli_select_db($con,'data');

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into datatable (username,email,mobile,comment) values ('$username','$email','$mobile','$comment')";
mysqli_query($con,$query);

header('location:index.php');

?>