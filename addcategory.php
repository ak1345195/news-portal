<?php 
session_start();
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$page = "";
include('include\header.php'); 
?>
    <div style="margin-left:25%;margin-top:10%; width:70%;">
    <form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateform()">
        <h1>Add Categories</h1>
        <hr>
  <div class="mb-3">
    <label for="category" class="form-label">Category:</label>
    <input type="text" class="form-control" placeholder="Add Category Name" id="category" aria-describedby="emailHelp" name="category">
  </div>
  <div class="mb-3">
  <label for="description">Description:</label>
  <textarea class="form-control" placeholder="Add Description" rows="5" id="description" name="text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Category</button>
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
    include('database\connection.php');
    if(isset($_POST['submit'])){
        $category_name = $_POST['category'];
        $des = $_POST['text'];
        $check = mysqli_query($conn, "SELECT * FROM `category` WHERE `category_name` = '".$category_name."'");
        if(mysqli_num_rows($check)>0){
          echo "<script>alert('category name already exists !!');</script>";
        }else{
        $query = mysqli_query($conn,"INSERT INTO `category`(`category_name`, `des`) VALUES ('".$category_name."','".$des."')");
        if($query){
            echo '<script>alert("category added successfully");</script>';
        }else{
            echo '<script>alert("category not added");</script>';
        }
      }
    }
    ?>