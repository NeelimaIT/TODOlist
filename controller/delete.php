<?php
include '../inc/env.php';
$id=$_REQUEST['id'];
$query="DELETE FROM todo WHERE id='$id'";
$response=mysqli_query($conn,$query);
if($response){
    header("location:../index.php");
}
?>