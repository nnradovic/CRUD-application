<?php 
require 'header.php';
require 'connect.php';
$sql = "SELECT * FROM racuni";
$query = mysqli_query($connect,$sql);

 ?>
<link rel="stylesheet" href="search.css">

">
<div class="container-fluid">
	<div class="text-center">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4">
				
				<input id="myinput" type="text" name ="searchtext" class="form-control awesomplete" >
	           
	            
			</div>
		</div>
    </div>
    <div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			
			     <table class="table table-hover">
			     	<thead>
			     		<tr>
			     			<th>Ime</th>
			     			<th>Prezime</th>
			     			<th>Iznos</th>
			     			<th>Vrsta Kartice</th>
			     		</tr>
			     	</thead> 

                    <tbody>
                    	

                    </tbody>
			     </table>
		        </div>
	         </div> 
		</div>
	</div> 
</div>

				

	<script src="search.js"></script>