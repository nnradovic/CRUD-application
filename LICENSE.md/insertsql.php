<?php 
require 'connect.php';

if(isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['iznos']) && isset($_POST['kartica'])){
	$ime=$_POST['ime'];
	$prezime=$_POST['prezime'];
	$iznos=$_POST['iznos'];
	$kartica=$_POST['kartica'];
	if(!empty($ime) && !empty($prezime) && !empty($iznos) && !empty($kartica)){
        $sql="INSERT INTO racuni VALUES (NULL,'$ime','$prezime','$iznos','$kartica')";
        $query = mysqli_query($connect,$sql);
        // header('Location: index.php');

      
	}else{
		echo 'Nisu uneso sva polja';
	}


}else{
	echo "Unesi sva polja";
}


 ?>