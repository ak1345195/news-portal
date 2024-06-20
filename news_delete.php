<?php 
include('database\connection.php');
$id = $_GET['delete'];
$query = mysqli_query($conn, "DELETE FROM `news` WHERE `id` = '".$id."'");
if($query){
    echo "<script>window.location.href = 'news.php';</script>";
}else{
    echo "<script>alert('news can't be deleted');</script>";
}
?>