<?php 
require 'header.php';
require 'connect.php';
$id=$_GET['id'];
// echo $id;
$sql="SELECT * FROM racuni WHERE id='$id'";
$query=mysqli_query($connect,$sql);
$korisnik=mysqli_fetch_assoc($query);

   $ime = $korisnik['ime'];
   $prezime = $korisnik['prezime'];
   $iznos = $korisnik['iznos'];
   $kartica = $korisnik['kartica'];


// $sticky =[];
// while($korisnik=mysqli_fetch_assoc($query)){
  
//    $ime = $korisnik['ime'];
//    $prezime = $korisnik['prezime'];
//    $iznos = $korisnik['iznos'];
//    $kartica = $korisnik['kartica'];
   
//    $sticky[]=[
//    	'id'=> $id,
//    'ime'=> $ime,
//    'prezime'=>$prezime,
//    'iznos'=>$iznos,
//    'kartica'=>$kartica
//    ];
// }

// $json_data=json_encode($sticky);


// echo $json_data;
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2" >
			<h3>Izmena korisnika</h3>
			<div class="row">
			    <div class="col-lg-6 col-lg-offset-3" >
				  <!-- <form action="edit.php" method="POST"> -->
				  	<input type="text" id="id" name="id" style="display:none" value="<?php echo $id ?>">
				  	<input type="text" id="editime" name="editime" placeholder="Username" value="<?php echo $ime ?>" class="form-control"><br>
				  	<input type="text" id="editprezime" name="editprezime" placeholder="Surname" value="<?php echo $prezime ?>" class="form-control"><br>
				  	<input type="text" id="editiznos" name="editiznos" placeholder="Deposit" value="<?php echo $iznos  ?>" class="form-control"><br>
				  	<input type="text" id="editkartica" name="editkartica" placeholder="Credt Card Type" value="<?php echo $kartica ?>" class="form-control"><br>
				  	<input type="submit" id="edit" name="editinsert"   class="form-control btn btn-primary" value="Send"><br>
				  <!-- </form> -->
			    </div>
	        </div>
		</div>
	</div>
</div>
<script src="edit.js"></script>
