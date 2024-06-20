<?php 
session_start();
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$page="home";
include('include\header.php'); 
?>
    </body>
    </html>
  


    <?php
    include('include\footer.php');
    ?>
