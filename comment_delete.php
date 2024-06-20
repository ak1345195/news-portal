<?php  
include('database\connection.php');
$id= $_GET['delete'];
$query= mysqli_query($conn,"DELETE FROM `comment` WHERE `id` = '".$id."'");
if($query){
    echo "<script>window.location.href = 'comments.php';</script>";
}else{
    echo "<script>alert('category not deleted');</script>";
}

?>