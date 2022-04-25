<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/team.php");
$entries = selectAllGallery('gallery', ['department' => 'Management Studies']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instructions - Instruction Units - DMS</title>

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

<!--CUSTOM ABOUT CSS-->	
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/units.css'; ?>">

<!--INCLUDED HEADER SECTION-->	
	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<!--ABOUT HEADING SECTION-->
<div class="page-wrapper">
<div class="home-banner">	
	<div class="container ">
		<div class="row custom-section d-flex align-items-center">
			<div class="col-12 col-lg-8">
				<div class="content">
					<h1 class="DIT">DEPARTMENT OF MANAGEMENT STUDIES</h1>
				<p>The Department of Management Studies delivers courses designed to develop skills and competencies required in the field, also the flexible mindset that is necessary to stay competitive in a diverse business setting that fosters decision–making, entrepreneurial thinking, and management strategies. In addition to being exemplary classroom instructors and experts in their field, the faculty within the Department of Management Studies is recognized for making significant contributions to the field through research.</p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<img src="<?php echo BASE_URL . '/assets/images/dms_svg.png'; ?>" alt="Home Banner">
			</div>	
		</div>
	</div>
</div>	
<div class="jumbotron cutter"></div>

<!--MISSION, VISION, FUNCTIONS AND RESPONSIBILITIES-->
	<div class="demo">
		<div class="container">
			<div class="team-heading">
				<h1>ABOUT THE DEPARTMENT</h1>
			</div>
			<div class="row">
				<div id="info-slider" class="owl-carousel">
					
					<div class="team">
					<h3>PROGRAMS OFFERED</h3>	
					<p class="description-mission">1. Bachelor of Science in Business Management Major in Marketing Management (MM)
					<br><br>2. Bachelor of Science in Hospitality Management (BSHM)
					</p>
				</div>
				<div class="team">
					<h3>BACHELOR OF SCIENCE IN BUSINESS MANAGEMENT MAJOR IN MARKETING MANAGEMENT</h3>	
					<h4>Program Profile</h4>
					<p class="description-mission">The Marketing Management Program prepares the graduate for careers in marketing, market research, advertising and public relations.  The curriculum provides the graduate with both technical skills and competencies required in the field, but also the flexible mindset that is necessary to stay competitive in a constantly changing business environment.
					</p>
				</div>
				<div class="team">
					<h3>BACHELOR OF SCIENCE IN BUSINESS MANAGEMENT MAJOR IN MARKETING MANAGEMENT</h3>	
					<h4>Program Outcome</h4>	
					<p class="description-mission">
					A graduate of a business or management degree should be able to:
					</p>
					<p class="description">
						- Perform the basic functions of management such as planning, organizing, staffing, directing, and controlling;
						<br><br>- Apply the basic concepts that underlie each of the functional areas of business (marketing, finance, human resources management, production and operations, management information technology, and strategic management) and employ these concepts in various business situations;
						select the proper decision-making tools to critically, analytically and creatively solve problems and drive results;
						<br><br>- Express oneself clearly and communicate effectively with stakeholders both in oral and written forms;
						<br><br>- Apply information and communication technology (ICT) skills as required by the business environment;
						<br><br>- Work effectively with other stakeholders and manage conflict in the workplace;
						<br><br>- Plan and implement business related activities;
						<br><br>- Demonstrate corporate citizenship and social responsibility; and
						<br><br>- Exercise high professional moral and ethical standards.
					</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT</h3>	
					<h4>Program Profile</h4>
					<p class="description-mission">The programs related to the fields of hospitality and tourism education will equip students with competencies that are needed to execute operational tasks and management functions in food production (culinary), accommodation, food and beverage service, tourism planning and product development, events planning, transportation services, travel and tour operations and other emerging sectors of hospitality and tourism industry.
					</p>
				</div>
				<div class="team">
					<h3>BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT</h3>	
					<h4>Program Profile</h4>	<br>
					<p class="description">
						- Produce food products and services complying with enterprise standards;
						<br><br>- Apply management skills in F & B service and operations;
						<br><br>- Perform and provide full guest cycle services for front office;
						<br><br>- Perform and maintain various housekeeping services for guest and facility operations;
						<br><br>- Plan and implement a risk management program to provide a safe and secure workplace; and
						<br><br>- Provide food and beverage service and manage the operation seamlessly based on industry standards.
					</p>
				</div>

				</div>
			</div>
		</div>	
	</div>

	<div class="stylecont">
	<svg viewBox="0 0 1366 245" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(47, 73, 94, 1)" d="M 0 101 L 694 110 L 694 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(47, 73, 94, 1)" d="M 693 110 L 1366 124 L 1366 0 L 693 0 Z" stroke-width="0"></path> </svg>
</div>

	<!--ABOUT DEPARTMENT UPDATES-->

<div class="dotm">
		<div class="dotm-heading">
			<h1>GALLERY</h1>
		</div>
		<div id="dotm-slider1" class="owl-carousel">
			<?php foreach ($entries as $entry): ?>
                <div class="dotm-content">  
                	<img src="<?php echo BASE_URL . '/assets/images/' . $entry['image']; ?>">
                	<p class="description"><?php echo $entry['caption']; ?></p>
                </div>

            <?php endforeach; ?>
		</div>
</div>

<!--ORG CHART & CONTACT INFO SECTION-->
	<div class="orgchart-section">
	<div class="container orgchart">
		<h1>ORGANIZATIONAL CHART</h1>
	</div>
	<div class="container dit-chart">
		<img src="">	
	</div>
	<div class="contact">
		<hr>
		<h3>CONTACT INFORMATION:</h3><br>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;ELIZABETH R. DUMLAO, DBA</strong> – Chairperson &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:0464379505">(046)-437-9505</a> local 212 / <a href="tel:0464376659">(046) 437-6659</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong><a href="mailto:cvsu.rosario@gmail.com?">cvsu.rosario@gmail.com</a></strong>
		</p>
	</div>
</div>

<!--LOGOS SECTION-->
	<div class="container-career">
		<div class="logos">
			<a href="https://www.gov.ph/"><img src="<?php echo BASE_URL . '/assets/images/rp-logo.png'; ?>"></a>
			<a href="https://ched.gov.ph/"><img src="<?php echo BASE_URL . '/assets/images/ched-logo.png'; ?>"></a>
			<a href="https://www.tesda.gov.ph/"><img src="<?php echo BASE_URL . '/assets/images/tesda-logo.png'; ?>"></a>
			<a href="https://www.dost.gov.ph/"><img src="<?php echo BASE_URL . '/assets/images/dost-logo.png'; ?>"></a>
			<a href="https://cvsu-rosario.edu.ph/citizens-charters/"><img src="<?php echo BASE_URL . '/assets/images/citizens-charter-logo.png'; ?>"></a>
			<a href="https://www.foi.gov.ph/"><img src="<?php echo BASE_URL . '/assets/images/foi-logo.png'; ?>"></a>
			<a href="http://noah.up.edu.ph/"><img src="<?php echo BASE_URL . '/assets/images/noah-logo.png'; ?>"></a>
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
<!--INCLUDED FOOTER SECTION-->
	<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

<!--OWL CAROUSEL SCRIPT SECTION -- used in mission, vision area-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
	
	$(document).ready(function(){
		$("#info-slider").owlCarousel({
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#dotm-slider1").owlCarousel({
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
</body>
</html>