<?php 
require 'connect.php';

if( isset($_POST['editime']) && isset($_POST['editprezime']) && isset($_POST['editiznos']) && isset($_POST['editkartica']) ){
           $id=$_POST['id'];
           // print_r($_POST);
			$ime=$_POST['editime'];
			$prezime=$_POST['editprezime'];
			$iznos=$_POST['editiznos'];
			$kartica=$_POST['editkartica'];

			if(!empty($ime) && !empty($prezime) && !empty($iznos) && !empty($kartica)){

				$sql="UPDATE  racuni SET ime='$ime', prezime = '$prezime', iznos ='$iznos', kartica = '$kartica' WHERE id='$id'";
				$query = mysqli_query($connect,$sql);
				
			}else{
				echo 'Nisu uneo sva polja';
			}
		}else{
			echo 'Morate uneti sva polja';
		}


 ?>