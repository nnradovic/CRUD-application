<?php 


require 'connect.php';
$id=$_GET['id'];

$sql="DELETE  FROM racuni WHERE id='$id'";
$query=mysqli_query($connect,$sql);
header('Location: index.php');


 ?>