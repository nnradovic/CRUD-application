<?php 

require 'connect.php';
// require 'searchaccount.php';


$search = $_POST['search'];  
$sql="SELECT * FROM racuni WHERE ime  LIKE '%$search%' OR  prezime  LIKE '%$search%' OR  iznos  LIKE '%$search%' OR  kartica  LIKE '%$search%' ";
$query = mysqli_query($connect, $sql);
	       
$arr=[];
while($row=mysqli_fetch_assoc($query)){
	$arr[]=[
    'ime' => $row['ime'],
    'prezime' => $row['prezime'],
    'iznos' => $row['iznos'],
    'kartica' => $row['kartica']
	];
}

echo json_encode($arr);


 ?>


