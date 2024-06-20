<?php 
    include('database\connection.php');
    $id= $_GET['delete'];
    $query= mysqli_query($conn,"DELETE FROM `category` WHERE `id` = '".$id."'");
    if($query){
        echo "<script>window.location.href = 'categories.php';</script>";
    }else{
        echo "<script>alert('category not deleted');</script>";
    }
?>