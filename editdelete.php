<?php 
require 'header.php';
require 'connect.php';

$sql = "SELECT * FROM racuni";
$query = mysqli_query($connect,$sql);
 ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h3>Brisanje i izmena korisnika</h3>
			<div class="row">
		        <div class="col-lg-10 col-lg-offset-1">
			     <table class="table">
			     	<thead>
			     		<tr>
			     			<th>Ime</th>
			     			<th>Prezime</th>
			     			<th>Iznos</th>
			     			<th>Vrsta Kartice</th>
			     		</tr>
			     	</thead> 

                    <tbody>
                    	<?php  
                    	while($row = mysqli_fetch_assoc($query)){
						$id=$row['id'];
						$ime=$row['ime'];
						$prezime=$row['prezime'];
						$iznos=$row['iznos'];
						$kartica=$row['kartica'];
						?>
                         <tr>

                         	<td><?php echo $ime ?></td>
                         	<td><?php echo $prezime ?></td>
                         	<td><?php echo $iznos ?></td>
                         	<td><?php echo $kartica ?></td>
                         	<td><button  class="btn btn-danger"><a href="deletesql.php?id=<?php echo $id ?>">Delete</a></button></td>
                            <td><button id="editacc" class="btn btn-warning"><a href="edit.php?id=<?php echo $id ?>">Edit</a></button></td>
                         </tr>
						<?php 
                        }
						 ?>

                    </tbody>
			     </table>
		        </div>
	         </div> 
		</div>
	</div> 
</div>
<script src="editget.js"></script>