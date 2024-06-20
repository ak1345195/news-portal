<?php 
session_start();
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$page = 'categories';
include('include\header.php'); 
?>
    <div style="margin-left:25%;margin-top:10%; width:70%;">
      <div class="text-end" >
    <a href="addcategory.php">Add Category</a>
      </div>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Category</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php 
    include('include\footer.php');
    include('database\connection.php');
      $query = mysqli_query($conn, "SELECT * FROM `category`");
      while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['category_name'];?></td>
      <td><?php echo substr($row['des'],0,200);?></td>
      <td><?php echo '<a href="edit.php?edit='.$row['id'].'" class="btn btn-info">edit</a>'?></td>
      <td><?php echo '<a href="delete.php?delete='.$row['id'].'" class="btn btn-danger">delete</a>'?></td>
    </tr>
    <?php
      }
    ?>
      </table>
    </div>
    </body>
    </html>