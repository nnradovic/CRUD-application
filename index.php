<?php 
require 'header.php';
require 'connect.php';

$sql = "SELECT * FROM racuni";
$query = mysqli_query($connect,$sql);
 ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h3>Account list</h3>
			<div class="row">
		        <div class="col-lg-10 col-lg-offset-1">
			     <table class="table table-hover">
			     	<thead>
			     		<tr>
			     			<th>Name</th>
			     			<th>Surname</th>
			     			<th>Deposit</th>
			     			<th>Card Type</th>
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
<script src="index.js"></script>