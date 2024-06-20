<?php 
session_start();
include('database\connection.php');
if($_SESSION['email'] != "" && $_SESSION['name'] != ""){
}else{
    header('location:admin_login.php');
}
$page = "";
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
        <form method="post" action="add_news.php" enctype="multipart/form-data" name="newsform" onsubmit="return validateform()">
        <h3>Add News</h3>
    <hr>
  <div class="mb-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" placeholder="Add title" id="title" aria-describedby="emailHelp" name="title">
  </div>
  <div class="mb-3">
  <label for="description">Description:</label>
  <textarea class="form-control" placeholder="Add Description" rows="5" id="description" name="text"></textarea>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Thumbnail:</label>
    <input type="file" class="form-control" placeholder="Add thumbnail" id="file" aria-describedby="emailHelp" name="file">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Choose category:</label>
    <select class="form-control" name="category" id="category">
      <?php 
      $query = mysqli_query($conn,"SELECT * FROM `category`");
      while($row = mysqli_fetch_array($query)){
      ?>
      <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option> 
      <?php 
      }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="Admin" class="form-label">Admin Name:</label>
    <input type="text" class="form-control disabled" value="<?php echo $_SESSION['name'];?>" id="Admin" aria-describedby="emailHelp" name="admin" readonly>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date:</label>
    <input type="date" class="form-control" placeholder="Add date" id="date" aria-describedby="emailHelp" name="date">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Add News</button>
</form>
    </div>
<script>
    function validateform(){
        var title = document.forms['newsform']['title'].value;
        if(title==""){
            alert('title must be filled');
            return false;
        }
        var text = document.forms['newsform']['text'].value;
        if(text.length<100){
            alert('description must be more than 100 characters');
            return false;
        }
        var file = document.forms['newsform']['file'].value;
        if(file==""){
            alert('Thumbnail must be given');
            return false;
        }
        var category = document.forms['newsform']['category'].value;
        if(category==""){
            alert('category must be filled');
            return false;
        }
        var date = document.forms['newsform']['date'].value;
        if(date==""){
            alert('date must be filled');
            return false;
        }
    }
</script>
        <?php 
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $des = $_POST['text'];
            $date = $_POST['date'];
            $cat = $_POST['category'];
            $admin = $_POST['admin'];
            $i = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];
    $upload_dir = 'images/';
    
    // Check if the upload directory exists and is writable
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $target_file = $upload_dir . basename($file);
    // Check for upload errors
    if ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>alert('Error: " . $_FILES['file']['error']."');</script>";
        $i = false;
    } elseif (move_uploaded_file($tmp_file, $target_file)) {
        
    } else {
        $i=false;
    }
}           if($i){
            $query1 = mysqli_query($conn,"INSERT INTO `news`( `admin`,`title`, `description`, `date`, `category`, `thumbnail`) VALUES ('".$admin."','".$title."','".$des."','".$date."','".$cat."','".$file."')");
            if($query1){
                echo "<script>alert('news uploaded successfully');</script>";
            }else{
                echo "<script>alert('news not uploaded');</script>";
            }
        }
        }
    include('include\footer.php');
    ?>
    </div>
    </body>
    </html>