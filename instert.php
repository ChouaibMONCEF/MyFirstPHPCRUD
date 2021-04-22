<?php
require'connect.php';
if(isset($_GET['id'])){
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$id=$_POST['id'];
$requete="UPDATE students SET name='$name' , age='$age' , city='$city' WHERE id='$id'";
$query=mysqli_query($con,$requete);
if(isset($query)){
    header("location:Read.php");
}
}else {
$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

$requete="INSERT INTO students(name , age, city) VALUES ('$name', '$age', '$city' )";

$query=mysqli_query($con,$requete);

if(isset($query)){
    header("location:index.php");
}
}
?>