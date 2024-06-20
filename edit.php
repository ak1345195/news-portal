<?php 
session_start();
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$page = "";
include('database\connection.php');
$id = $_GET['edit'];
$query = mysqli_query($conn, "SELECT * FROM `category` WHERE `id` = '".$id."' LIMIT 0,1");
while($row = mysqli_fetch_array($query)){
    $category = $row['category_name'];
    $des = $row['des'];
}
include('include\header.php'); 
?>
    <div style="margin-left:25%;margin-top:10%; width:70%;">
    <form action="edit.php?edit=<?php echo $id;?>" method="post" name="categoryform" onsubmit="return validateform()">
        <h1>Update Categories</h1>
        <hr>
  <div class="mb-3">
    <label for="category" class="form-label">Category:</label>
    <input type="text" class="form-control" id="category" value="<?php echo $category;?>" aria-describedby="emailHelp" name="category">
  </div>
  <div class="mb-3">
  <label for="description">Description:</label>
  <textarea class="form-control" rows="5" id="description" name="text"><?php echo $des; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update Category</button>
</form>
<script>
    function validateform(){
        var x = document.forms['categoryform']['category'].value;
        if(x==""){
            alert('category must be filled');
            return false;
        }
    }
</script>
    </div>
    </body>
    </html>
    <?php 
    include('include\footer.php');
    if(isset($_POST['submit'])){
        $category_name = $_POST['category'];
        $description = $_POST['text'];
        $query = mysqli_query($conn,"UPDATE `category` SET `category_name`='".$category_name."',`des`='".$description."' WHERE `id` = '".$id."'");
        if($query){
            echo "<script>window.location.href = 'categories.php';</script>";
        }else{
            echo '<script>alert("category not updated");</script>';
        }
    }
    ?>