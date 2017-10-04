<?php 
require 'editdelete.php';
require 'connect.php';
$id=$_GET['id'];

 
   $korisnik=mysqli_fetch_assoc($query);
  $id=$korisnik['id'];
   $ime = $korisnik['ime'];
   $prezime = $korisnik['prezime'];
   $iznos = $korisnik['iznos'];
   $kartica = $korisnik['kartica'];
   
   $sticky[]=[
   'id'=> $id,
   'ime'=> $ime,
   'prezime'=>$prezime,
   'iznos'=>$iznos,
   'kartica'=>$kartica
   ];


$json_data=json_encode($sticky);


echo $json_data;


 ?>
