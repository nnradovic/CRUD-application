<?php 

require 'connect.php';

$sql = "SELECT * FROM racuni";
$query = mysqli_query($connect,$sql);

$data = [];
while($row = mysqli_fetch_assoc($query)){

   $ime = $row['ime'];
   $prezime = $row['prezime'];
   $iznos = $row['iznos'];
   $kartica = $row['kartica'];


   $data[]=[
   'ime'=>$ime,
   'prezime' =>$prezime,
   'iznos'=>$iznos,
   'kartica' => $kartica
   ];
}

 $json_encode = json_encode($data);

 echo $json_encode;

 ?>