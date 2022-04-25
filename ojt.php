<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/team.php");
$entries = selectAll('dotm');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instructions - Instruction Units - OJT Office</title>

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
					<h1>ON-THE-JOB TRAINING OFFICE</h1>
				<p>The On-the-Job Training Office provides services to OJT students by assisting them in the preparation of the needed requirements to undergo On-the-Job Training. It also improves and establishes strategic agreement between the academe and the government as well as the academe and private companies focusing clear objectives, clear expectations, established method of learning verification and effective monitoring and implementation specific to OJT Program. OJT is a major requirement of the University in all courses offered.
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<img src="<?php echo BASE_URL . '/assets/images/ojt_svg.png'; ?>" alt="Home Banner">
			</div>	
		</div>
	</div>
</div>	
<div class="jumbotron cutter"></div>

<!--MISSION, VISION, FUNCTIONS AND RESPONSIBILITIES-->
	<div class="demo">
		<div class="container">
			<div class="team-heading">
				<h1>MORE ABOUT THE OJT OFFICE</h1>
			</div>
			<div class="row">
				<div id="info-slider" class="owl-carousel">

				<div class="team">
					<h3>ROLES AND RESPONSIBILITIES</h3>
					<h4>OJT OFFICE</h4>		
					<p class="description-mission">
						1. Provide the OJT students the basic orientation on work values, housekeeping, discipline and key behavior indicator that should be observed by the trainees while in training and/or field exposures including matters related to logistics, finance and other concerns.<br>
						2. Design, implement and evaluate a training plan in coordination with the accepting institution/agency. <br>
						3. Require trainees to submit themselves for interview, examinations and submit pertinent documents to support the application.<br>
						4. Issue an official endorsement of On-the-Job Training students which shall be used for evaluation, processing and application. <br>
						5. Designate a Training Coordinators who will supervise the On-the-Job Trainees and will coordinate with the partner agency/institution in various activities under the OJT Program. <br>
						6. Conduct periodic visits to the partner agencies/institutions where the trainees are assigned and confer with the authorized representative to discuss matters relevant to the training. <br>
						7. Withdraw a trainee who is found to behave and/or act in defiance to existing standards, rules and regulations of partner agencies/institutions.
						</p>
				</div>

				<div class="team">
					<h3>ROLES AND RESPONSIBILITIES</h3>
					<h4>AREA COORDINATOR</h4>		
					<p class="description-mission">
						1. The area/practicum coordinator is expected to conduct an initial site visit to ensure that the training facility is safe and conducive for the student/trainee.<br>
						2. The area/practicum coordinator is expected to review, orient, interpret and clarify to the student /trainee the objectives of the on the job training program.<br>
						3. The area/practicum coordinator is responsible to do a regular monitoring of the student/trainees under him/her to check on their overall performance and discuss with the On Site Supervisor to further improve the OJT program. This will ensure immediate resolution of student/trainee’s concerns if there are, as well as provide an opportunity to evaluate the OJT program and follow upon the progress of the student/trainee.<br>
						4. A regular meeting should be done with his/her students/trainees or communicate with them regularly to have feedback on their assignments and validate complaints concerns of both parties, if any. <br>
						5. The area/practicum coordinator should also be available for consultations with the students/trainees and provide coaching and counselling assistance, if needed. <br>
						6. The area/practicum coordinator is responsible in evaluating the student/trainee’s reports, evaluation grade and will give the final grade taking into consideration the evaluation of the On-Site Supervisor.
						</p>
				</div>

				<div class="team">
					<h3>ROLES AND RESPONSIBILITIES</h3>
					<h4>PARTNER INDUSTRIES/INSTITUTIONS</h4>		
					<p class="description-mission">
						1. Design, implement and evaluate the training plan jointly with CvSU-CCAT.<br>
						2. Screen, select and deploy trainees to the different offices and operating units. <br>
						3. Designate a Training Coordinator who will be responsible in the implementation of the Training Program as well as arrange, supervise and evaluate the performance of the trainees;<br>
						4. Ensure that necessary abilities, values and knowledge are imparted to the training in accordance with the approved training plan. <br>
						5. The partner institution/company/office shall conduct an evaluation of the student/trainee’s overall performance based on the agreed standards or requirement with the school. <br>
						6. The partner institution/company/office shall issue a Certificate of Completion to the student/trainee upon completion of the on the job training program. <br>
						7. Notify CvSU-CCAT OJT Coordinator immediately of any untoward incidents/misbehaviour of the trainees while on duty.
						</p>
				</div>

				<div class="team">
					<h3>ROLES AND RESPONSIBILITIES</h3>
					<h4>STUDENTS/TRAINEES</h4>		
					<p class="description-mission">
						1. Student/trainee should always observe discipline and right conduct.<br>
						2. Student/trainee should wear the appropriate dress code. <br>
						3. S/he should not engage in gambling, illicit activities, drinking intoxicating beverages, smoking and related activities while at work or within the institution/company/office premises.<br>
						4. Student/trainee is expected to submit reports and requirements on time. <br>
						5. Student/trainee should observe punctuality and attendance in reporting to his/her assigned area. S/he should accomplish the attendance record sheet/time card/bio metric record sheet noted by the training supervisor.
						</p>
				</div>

				</div>
			</div>
		</div>	
	</div>

<!--ORG CHART & CONTACT INFO SECTION-->
	<div class="orgchart-section">
	<div class="container orgchart">
		<h1>ORGANIZATIONAL CHART</h1>
	</div>
	<div class="container chart">
		<img src="<?php echo BASE_URL . '/assets/images/ojt-org-chart.png'; ?>">	
	</div>
	<div class="contact">
		<hr>
		<h3>CONTACT INFORMATION:</h3><br>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;Mr. Regie C. Delos Reyes</strong> – Campus OJT Coordinator &nbsp;&nbsp;&nbsp;
		</p>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;Maria Desiree T. Arcon</strong> – In-Charge, Job & Career Placement Services/OJT Office Clerk &nbsp;&nbsp;&nbsp;
		</p>
		<p>
		<i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:0464379505">(046) 437-9505</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong> <a href="mailto:ojt.cvsur@gmail.com?">ojt.cvsur@gmail.com</a></strong>
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