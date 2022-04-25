<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

$posts1 = selectAll('posts');
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


  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title><?php echo $post['title']; ?> | DISite</title>
</head>

<body>
  <!-- Facebook Page Plugin SDK -->
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="hSACS1DK"></script>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?></h1>

          <div class="post-content">
            <div class="imgbx">
              <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>">
            </div>
            <?php echo html_entity_decode($post['body']); ?>
            <a href="<?php echo BASE_URL . "/newsandupdates.php"; ?>" class="btn">News and Updates</a>
          </div>
        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        <div class="fb-page" data-href="https://www.facebook.com/caviteState.rosario/" data-small-header="false"
          data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/caviteState.rosario/" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/caviteState.rosario/">Cavite State University - CCAT Campus</a></blockquote>
        </div>


        <div class="section popular">
          <h2 class="section-title"><a href="newsandupdates.php">Recent Posts</a></h2>

          <?php foreach ($posts as $key => $p): ?>
            <?php if ($key == 10) break; ?>
            <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
            <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
              <h6><?php echo $p['title'] ?></h6>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>