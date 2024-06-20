<?php 
session_start();
error_reporting(0);
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
include('database\connection.php');
$query = mysqli_query($conn, "SELECT * FROM `news`");
$page  = 'news';
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
    <div class="text-end" >
    <a href="add_news.php">Add News</a>
      </div>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Admin</th>
          <th>title</th>
          <th>Description</th>
          <th>date</th>
          <th>Category</th>
          <th>thumbnail</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php 
      while($row = mysqli_fetch_array($query)){

    ?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['admin'];?></td>
      <td><?php echo $row['title'];?></td>
      <td><?php echo substr($row['description'],0,200);?></td>
      <td><?php echo $row['date'];?></td>
      <td><?php echo $row['category'];?></td>
      <td><img class="img img-thumbnail" width="150px" height="150px" src="images\<?php echo $row['thumbnail'];?>" alt="<?php echo "images/".$row['thumbnail'];?>"></td>
      <td><?php echo '<a href="news_edit.php?edit='.$row['id'].'" class="btn btn-info">edit</a>'?></td>
      <td><?php echo '<a href="news_delete.php?delete='.$row['id'].'" class="btn btn-danger">delete</a>'?></td>
    </tr>
    <?php } ?>
      </table>
        <?php 
    include('include\footer.php');
    ?>
    </div>
    </body>
    </html>