<?php
include '../inc/env.php';
$todolist=$_REQUEST['todo'];

$query="INSERT INTO todo(todos) VALUES ('$todolist')";
$response=mysqli_query($conn,$query);
if($response){
    header("location:../index.php");
}

?>