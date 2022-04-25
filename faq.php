<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/departments.php");

$about = selectOne('departments', ['name' => 'Office of the Director for Instructions'] );
	$description1 = html_entity_decode($about['description']);
	$display_art1 = $about['display_art'];
	$org_chart1 = $about['org_chart'];
	$contact1 = html_entity_decode($about['contact']);
	$about_info1 = html_entity_decode($about['about_info']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instructions - FAQ</title>

	<!--Swiper CDN-->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!--Carousel  & BOOTSTRAP CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>


	<!--Font Awesome CDN-->
	<script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>

	<!--INCLUDED HEADER AND FOOTER CSS-->
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/footer.css'; ?>">

</head>
<body>

<!--CUSTOM ABOUT CSS-->	
	<link rel="stylesheet" href="assets/css/faq.css">

<!--INCLUDED HEADER SECTION-->	
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<!--ABOUT HEADING SECTION-->
<div class="page-wrapper">
	<div class="post-slider">
      <h1 class="slider-title"><a href="faq.php">Frequently Asked Questions</a></h1>
 	</div>

  <div class="container">
  	<div class="button-group">
        <form class="search" action="faq.php" method="post">
            <input type="text" name="search-faq" class="text-input" placeholder="Type your question or keyword here . . .">
        </form>
    </div>
  	<div class="row">
  		<div class="col-md-12">
  			<div id="accordion">
  				<?php foreach ($faqres as $key => $req): ?>
				  <div class="card">
				    <div class="card-header" id="<?php echo $key; ?>">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="<?php echo '#'.$key.'One';?>" aria-expanded="true" aria-controls="<?php echo $key.'One';?>">
				          <?php echo $req['question']; ?>
				        </button>
				      </h5>
				    </div>
				    <div id="<?php echo $key.'One';?>" class="collapse show" aria-labelledby="<?php echo $key; ?>" data-parent="#accordion">
				      <div class="card-body">
				        <?php echo $req['answer']; ?>
				      </div>
				    </div>
				  </div>
				<?php endforeach; ?>
			</div>
  		</div>
  		
  	</div>
  </div>




</div>
<!--INCLUDED FOOTER SECTION-->
	<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

</body>
</html>