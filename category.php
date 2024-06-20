<?php 
session_start();
error_reporting(0);
if($_SESSION['email'] != ""){

}else{
    header('location:admin_login.php');
}
$admin = $_SESSION['name'];
include('database\connection.php');
$category = $_GET['single'];
$query = mysqli_query($conn, "SELECT * FROM `news` WHERE `category` = '".$category."'");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>News Home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style\blog.css" rel="stylesheet">
  </head>
  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <body>
  <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#"><div id="google_translate_element"></div>
        </a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">News Portal</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <form method="post" action="search.php">
          <div class="input-group sm-3">
            <input type="text" class="form-control" name="search" placeholder="Search">
            <button class="btn btn-success" name="submit" type="submit" >Go</button>
          </div>
    </form>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="category.php?single=World">World</a>
      <a class="p-2 link-secondary" href="category.php?single=Technology">Technology</a>
      <a class="p-2 link-secondary" href="category.php?single=Culture">Culture</a>
      <a class="p-2 link-secondary" href="category.php?single=Business">Business</a>
      <a class="p-2 link-secondary" href="category.php?single=politics">Politics</a>
      <a class="p-2 link-secondary" href="category.php?single=Science">Science</a>
      <a class="p-2 link-secondary" href="category.php?single=Health">Health</a>
      <a class="p-2 link-secondary" href="category.php?single=Style">Style</a>
      <a class="p-2 link-secondary" href="category.php?single=Travel">Travel</a>
      <a class="p-2 link-secondary" href="contact.php">Contact Us</a>
    </nav>
  </div>
</div>

<main class="container">
<div class="card">
  <div class="card-body"><img src="images\mediaimgblog.jpg" alt="images\mediaimgblog.jpg" width="100%" height="400px"></div>
</div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        News
      </h3> 
              <?php 
            while($row = mysqli_fetch_array($query)){
      
          ?>
      <article class="blog-post">
        <b><?php echo $row['title'];?></b>
        <p class="blog-post-meta"><?php echo $row['date'];?> by <a href="#"><?php echo $row['admin'];?></a></p>
        <p><?php echo $row['category'];?></p>
          <center><img class="img img-thumbnail" width="250px" height="250px" src="images\<?php echo $row['thumbnail'];?>" alt="<?php echo "images/".$row['thumbnail'];?>"></center>    
        <p><?php echo substr($row['description'],0,200);?></p>
        <p><a href="single_page.php?single=<?php echo $row['id']; ?>" class="btn btn-primary">Read More</a></p>
      </article>
      <?php } ?>

    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Category</h4>
          <ol class="list-unstyled mb-0">
            <?php
            $query1 = mysqli_query($conn,"SELECT * FROM `category`");
            while($row1 = mysqli_fetch_array($query1)){
            ?>
            <li><a href="category.php?single=<?php  echo $row1['category_name']; ?>"><?php echo $row1['category_name'];?></a></li>
            <?php
            }
            ?>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
<?php 
          include('include\footer.php');
          ?>
<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>