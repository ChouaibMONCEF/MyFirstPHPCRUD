<?php 
require 'connect.php';
$id=$_GET['id'];
$requete="DELETE FROM students where id='$id'";
$query=mysqli_query($con,$requete);
if(isset($query)){
    header("location:Read.php");
}



?>