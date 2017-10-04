<?php 
require 'header.php';
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2" >
			<h3>Dodaj novog korisnika</h3>
			<div class="row">
			    <div class="col-lg-6 col-lg-offset-3" >
				  <!-- <form action="insert.php" method="POST"> -->
				  	<input id="ime" type="text" name="ime" placeholder="Username" class="form-control"><br>
				  	<input id="prezime" type="text" name="prezime" placeholder="Surname" class="form-control"><br>
				  	<input id="iznos" type="text" name="iznos" placeholder="Deposit" class="form-control"><br>
				  	<input id="kartica" type="text" name="kartica" placeholder="Credt Card Type" class="form-control"><br>
				  	<input id="insert" type="submit" name="insert"  class="form-control btn btn-primary" value="Send"><br>
				  <!-- </form> -->
			    </div>
	        </div>
		</div>
	</div>
</div>
<script src="insert.js"></script>