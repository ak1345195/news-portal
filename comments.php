<?php 
session_start();
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$page="comments";
include('include\header.php');  
?>
    <div class="bg-dark" style="margin-left:16%; width:85%; padding:5px;">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item"><a href="news.php">News</a></li>
        <li class="breadcrumb-item active">Add News</li>
    </ul>
    </div>
    <div style="margin-left:25%;margin-top:10%; width:70%;">
        <h3>Comments</h3>
        <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Comment</th>
          <th>Delete</th>
        </tr>
        <?php 
    include('database\connection.php');
      $query = mysqli_query($conn, "SELECT * FROM `comment`");
      while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['comment'];?></td>
      <td><a class="btn btn-danger" href="comment_delete.php?delete=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php
      }
    ?>
      </table>
    </div>

      
    </main>
    </body>
    </html>
  


    <?php
    include('include\footer.php');
    ?>
