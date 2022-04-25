<?php include("path.php");  
include(ROOT_PATH . "/app/controllers/posts.php");
$entries = selectAll('dotm');
$teams=selectAll('team');

$posts = array();
$posts = getPosts();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instructions - HOME</title>

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

<!--Font Awesome CDN-->
	<script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>

<!--INCLUDED HEADER AND FOOTER CSS-->
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/footer.css'; ?>">
</head>
<body>

<!--CUSTOM INDEX CSS-->
 	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/index.css'; ?>">

<!-- INDEX BANNER SECTION-->
<div class="page-wrapper">
<div class="home-banner">	
	<div class="container ">
		<div class="row custom-section d-flex align-items-center">
			<div class="col-12 col-lg-7">
				<img class="linktoccat" src="<?php echo BASE_URL . '/assets/images/cvsu-logo.png'; ?>"><h2>CAVITE STATE UNIVERSITY</h2>
				<h3>CCAT Campus</h3>
				<h5>OFFICE OF THE DIRECTOR FOR INSTRUCTIONS</h5>
				<p>Welcome to the official website of the Office of the Director for Instructions of Cavite State University - CCAT Campus.</p>
				<?php if (!isset($_SESSION['empid'])): ?>
					<a href="login.php" class="linktologin">Login</a>
				<?php endif; ?>
				
			</div>
			<div class="col-12 col-lg-5">
				<img src="<?php echo BASE_URL . '/assets/images/prof.jpg'; ?>" alt="Home Banner">
			</div>	
		</div>
	</div>
</div>

<!-- CUSTOM JUMBOTRON AS SEPARATOR-->
	<div class="jumbotron sec2"></div>

<!-- DEPARTMENT OF THE MONTH SECTION-->
	<div class="dotm">
		<div class="dotm-heading">
			<h1>DEPARTMENT OF THE MONTH</h1>
		</div>
		<div id="dotm-slider" class="owl-carousel">
			<?php foreach ($entries as $entry): ?>
                <div class="dotm-content">  
                	<img src="<?php echo BASE_URL . '/assets/images/' . $entry['image']; ?>">
                    <p class="description"><?php echo $entry['caption']; ?></p>
                </div>
            <?php endforeach; ?>
		</div>
	</div>

<!-- TEAM SECTION-->
<div class="wrapper">
	 <div class="team-section">
		<div class="container team-cont">
			<div class="row">
				<div class="col-lg-6">
					<div class="team-left">
						<h1>Meet Our Team</h1>
						<p>"I have no special talents. I am only passionately curious." <br>-Albert Einstein <br>	<br>
						The ceaseless search for improvement keeps the Office of the Director for Instructions busy round-the-clock. Our hopes is to only and always deliver the best outputs that conform to the highest standard of education for the students of our university to enjoy. All these are made possible by our passionately curious team members.</p>
					</div>
				</div>
				<div class="col-lg-6 members">
					<div class="team-pics">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach ($teams as $team): ?>
								<div class="swiper-slide" style="background-image:url(<?php echo BASE_URL . '/assets/images/' . $team['image']; ?>)">
									<h2><?php echo $team['name']; ?> <span>- <?php echo $team['position']; ?></span></h2>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- NEWS AND UPDATES SECTION-->
	<div class="post-slider">
      <h1 class="slider-title">NEWS AND UPDATES</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">
        <?php foreach ($posts as $post): ?>
          <div class="post">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
          <div class="post-info">
            <h6><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h6>
            <i class="far fa-user"> <?php echo $post['firstname']; ?></i>
            &nbsp;
            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

<!-- CAREER AND LOGOS SECTION-->
    <div class="container-career">
		<div class="content">
			<h1>Want to start a career with us?</h1>
			<p>Submit your CV to instructionoffice@gmail.com</p>
		</div>
		<div class="logos">
			<a href="https://www.gov.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/rp-logo.png'; ?>"></a>
			<a href="https://ched.gov.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/ched-logo.png'; ?>"></a>
			<a href="https://www.tesda.gov.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/tesda-logo.png'; ?>"></a>
			<a href="https://www.dost.gov.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/dost-logo.png'; ?>"></a>
			<a href="https://cvsu-rosario.edu.ph/citizens-charters/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/citizens-charter-logo.png'; ?>" ></a>
			<a href="https://www.foi.gov.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/foi-logo.png'; ?>"></a>
			<a href="http://noah.up.edu.ph/" target="_blank" rel="noopener" rel="noreferrer"><img src="<?php echo BASE_URL . '/assets/images/noah-logo.png'; ?>"></a>
		</div>
		<div class="custom-shape-divider-bottom-1620646504">
		    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
		        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
		        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
		        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
		    </svg>
		</div>
	</div>
</div>

<!-- INCLUDED FOOTER SECTION-->
	<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

	<!-- JQuery for Slick Carousel used in News and Updates-->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	  <!-- Slick Carousel used in News and Updates-->
	  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	  <!-- Custom JS Script used in News and Updates-->
	  <script src="assets/js/scripts.js"></script>

<!--OWL CAROUSEL SCRIPT SECTION -- used in mission, vision area-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#dotm-slider").owlCarousel({
				items:1,
				itemsDesktop:[1000,1],
				itemsDesktopSmall:[979,1],
				itemsTablet:[768,1],
				itemsMobile:[650,1],
				pagination:true,
				autoPlay:true
			})
		});
	</script>

<!--JQUERY SWIPER SCRIPT SECTION -- used in team members area-->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
	    var swiper = new Swiper('.swiper-container', {
	      effect: 'cube',
	      grabCursor: true,
	      autoplay: true,
	      cubeEffect: {
	        shadow: true,
	        slideShadows: true,
	        shadowOffset: 20,
	        shadowScale: 0.94,
	      },
	      pagination: {
	        el: '.swiper-pagination',
	      },
	    });
	  </script>
</body>
</html>