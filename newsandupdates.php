<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/posts.php");
$posts = array();
$postsTitle = 'Recent Posts';
$posts1 = selectAll('posts');

if (isset($_GET['page'])) {
  $page=$_GET['page'];
} else {
  $page=1;
}

$num_per_page = 5;
$start_from = ($page-1)*$num_per_page;

$posts = getPostsLimit($start_from, $num_per_page);

if(isset($_POST['search-term'])){
  $postsTitle = "You searched for '" . $_POST['search-term'] ."'";
 $posts = searchPosts($_POST['search-term']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/footer.css'; ?>">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/newsupdates.css">

    <title>Office of the Director for Instruction - NEWS AND UPDATES</title>
</head>

<body>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title"><a href="newsandupdates.php">NEWS AND UPDATES</a></h1>
    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h2 class="recent-post-title"><?php echo $postsTitle ?></h2>

        <?php foreach ($posts as $post): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
            <div class="post-preview">
              <h5><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h5>
              <i class="far fa-user"> <?php echo $post['firstname']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
              </p>
              <a href="single.php?id=<?php echo $post['id']; ?>" class="read-more">Read More</a>
            </div>
          </div>  
        <?php endforeach; ?>

        <div class="pagination">
          <?php 
          $res=selectAll('posts');
          $total_record = count($res);

          $total_page = ceil($total_record/$num_per_page);

          if ($page>1) {
            echo "<a href='newsandupdates.php?page=".($page-1)."' class='btn btn-danger'>prev</a>";
          }
          

          for($i=1; $i<$total_page; $i++){
            echo "<a href='newsandupdates.php?page=".$i."' class='btn btn-primary'>$i</a>";
          }

          if ($i>$page) {
            echo "<a href='newsandupdates.php?page=".($page+1)."' class='btn btn-danger'>next</a>";
          }
        ?>

        </div>
        
      </div>
      <!-- // Main Content -->

      <div class="sidebar">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="newsandupdates.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
      
        <div class="section popular">
          <h2 class="section-title">Old Posts</h2>
          <?php foreach ($posts1 as $key => $p): ?>
            <?php if ($key == 5) break; ?>
              <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
            <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
              <h6><?php echo $p['title'] ?></h6>
            </a>
          </div>
          <?php endforeach; ?>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>
