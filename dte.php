<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/team.php");
$entries = selectAllGallery('gallery', ['department' => 'Teacher Education']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instructions - Instruction Units - DTE</title>

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
					<h1>DEPARTMENT OF TEACHER EDUCATION</h1>
				<p>The Department of Management Studies delivers courses designed to develop skills and competencies required in the field, also the flexible mindset that is necessary to stay competitive in a diverse business setting that fosters decision–making, entrepreneurial thinking, and management strategies. In addition to being exemplary classroom instructors and experts in their field, the faculty within the Department of Management Studies is recognized for making significant contributions to the field through research.</p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<img src="<?php echo BASE_URL . '/assets/images/dte_svg.png'; ?>" alt="Home Banner">
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
					<h3>MISSION</h3>	
					<p class="description-mission">The Department of Teacher Education shall provide relevant education and training marked by equity and excellence in responding to the needs of education students. It shall produce teachers who are morally upright and institutionally competitive.</p>
				</div>

				<div class="team">
					<h3>VISION</h3>		
					<p class="description-mission">The leading department in CvSU-CCAT Campus known for training and developing Education students imbued with sterling character for campus wide competitiveness.</p>
				</div>

				<div class="team">
					<h3>PROGRAMS OFFERED</h3>	
					<p class="description-mission"><strong>1. Bachelor of Secondary Education (BSE) </strong><br>
					Major in:<br>
					- English<br>
					- Math<br>
					- General Science<br><br>
					<strong>2. Bachelor of Technical-Vocational Teacher Education (BTVTED) </strong><br>
					Major in:<br>
					- Automotive Technology<br>
					- Electrical Technology <br>
					- Electronics Technology <br>
					- Fashion and Garments Technology <br>
					- Hotel and Restaurant Services <br>
					- HVAC Technology <br>
					- Mechanical Technology <br>
					- Welding and Fabrication
					</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF SECONDARY EDUCATION</h3>
					<h4>Best Practices</h4>		
					<p class="description-mission">The BSE program must:</p>
					<p class="description">1. Allow faculty to continuously become a member of different national and international organizations;<br><br>
					2. Support the dissemination of developed workbooks or modules by the faculty;<br><br>
					3. Support students and faculty in the participation of various competitions and attending seminars and conferences;<br><br>
					4. Promote faculty development through endorsing them to be speakers in conferences, national and international levels;<br><br>
					5. Build strong linkage with alumni to strengthen job placement;<br><br>
					6. Conduct Competency Appraisal every semester as part of review in preparation for the Licensure Examination for Teachers (LET);<br><br>
					7. Implement Standardized Aptitude Test for Teachers (SATT) yearly for students’ retention;<br><br>
					8. Conduct periodic review of curriculum by the committee assigned;<br><br>
					9. Conduct Tracer Studies, inclusive of analysis and evaluation; and <br><br>
					10. Encourage faculty to write textbooks and references; to be utilized in the class.</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF SECONDARY EDUCATION</h3>
					<h4>Program Description</h4>		
					<p class="description-mission">Bachelor of Secondary Education Program prepares the graduates for careers in teaching, classroom management, instructional materials development, research and extension programs and good relations to the stakeholders. The curriculum sets an environment that would equip them with the technical skills and competencies required in this field. The program also creates a new paradigm making the BSE graduates agents of change, staying cool and calm amidst diverse culture in every corner of the world.</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF SECONDARY EDUCATION</h3>
					<h4>Program Objectives</h4>		
					<p class="description-mission">The BSE program aims to:</p>
					<p class="description">1. Provide education students the opportunity to acquire and possess basic and higher order thinking skills in literacy, communication, numeracy and computer literacy;<br><br>
					2. Train students to skillfully apply the theories and principles of teaching and learning diverse learners in actual classroom;<br><br>
					3. Encourage future educators to pursue continuous professional growth and development to better fulfill their mission as teachers;<br><br>
					4. Prepare students to engage in relevant research and extension services to respond to the needs of the community; and<br><br>
					5. Demonstrate the professional, social and ethical standard in the teaching profession.</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF SECONDARY EDUCATION</h3>
					<h4>Program Outcomes</h4>		
					<p class="description-mission">The graduates of the BSE program shall be able to:</p>
					<p class="description">1. Teach the subjects which they choose to be their major subjects to include English, Math and Biological Science;<br><br>
					2. Pass the Licensure Examination for Teachers;<br><br>
					3. Create modules, workbooks and other instructional materials;<br><br>
					4. Undertake simple research and extension activities;<br><br>
					5. Promote the general well-being of all education students;<br><br>
					6. Apply good judgment to resolve education problems;<br><br>
					7. Actively engage in all school activities;<br><br>
					8. Act as foster parents to the students;<br><br>
					9. Implement school and classroom policies and regulations;<br><br>
					10. Supervise students in their day to day activities;<br><br>
					11. Pursue post-graduate studies for their professional advancement;<br><br>
					12. Provide good leadership to the institution and to the community;<br><br>
					13. Involve oneself in other agencies such as COMELEC and Census; and<br><br>
					14. Have functional knowledge about the issues and technological advancement in education.</p>
				</div>

				<div class="team">
					<h3>BSE MAJOR IN ENGLISH</h3>
					<h4>Program Outcomes</h4>		
					<p class="description-mission">The graduates of the BSE Major in English program shall be able to:</p>
					<p class="description">1. Possess broad knowledge of language and literature for effective learning;<br><br>
					2. Use English as a global language in a multilingual context as it applies to the teaching of language and literature;<br><br>
					3. Acquire extensive reading background in language, literature and allied fields;<br><br>
					4. Demonstrate proficiency in oral and written communication;<br><br>
					5. Show competence in employing innovative language and literature teaching approaches, methodologies, and strategies;<br><br>
					6. Use technology in facilitating language learning and teaching;<br><br>
					7. Inspire students and colleagues to lead relevant and transformative changes to improve learning and teaching language and literature; and<br><br>
					8. Display skills and abilities to be reflective and research-oriented language and literature teacher.
					</p>
				</div>

				<div class="team">
					<h3>BSE MAJOR IN MATHEMATICS</h3>
					<h4>Program Outcomes</h4>		
					<p class="description-mission">The graduates of the BSE Major in English program shall be able to:</p>
					<p class="description">1. Exhibit competence in mathematical concepts and procedures;<br><br>
					2. Exhibit proficiency in relating mathematics to other curricular areas;<br><br>
					3. Manifest meaningful and comprehensive pedagogical content  knowledge of mathematics;<br><br>
					4. Demonstrate competence in designing, constructing and utilizing different forms of assessment in mathematics;<br><br>
					5. Demonstrate proficiency in problem-solving by solving and creating routine and non-routine problems with different levels of complexity;<br><br>
					6.  Use effectively appropriate approaches , methods and techniques in teaching mathematics including technological tools; and<br><br>
					7. Appreciate mathematics as an opportunity for creative work, moments of enlightenment, discovery and gaining insights of the world.
					</p>
				</div>

				<div class="team">
					<h3>BSE MAJOR IN GENERAL SCIENCE</h3>
					<h4>Program Outcomes</h4>		
					<p class="description-mission">The graduates of the BSE Major in English program shall be able to:</p>
					<p class="description">1. Demonstrate deep understanding of scientific concepts and principles;<br><br>
					2. Apply scientific inquiry in teaching and learning; and<br><br>
					3. Utilize effective science teaching and assessment methods..
					</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION</h3>
					<h4>Program Description</h4>		
					<p class="description-mission">BTVTED program will equip students with skills and competencies that are needed to execute technical and vocational-related tasks in the field of education. The curriculum gives the teaching-and-learning process an exemplary structure that would exhaust the related competencies needed to shape the future of the graduates. The program also offers practical skills that would help improve life in this ever-changing world.</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION</h3>
					<h4>Program Objectives</h4>		
					<p class="description-mission">The BTVTED program aims to:</p>
					<p class="description">1. Execute technical and vocational knowledge acquired during the training for the improvement of human life;<br><br>
					2. Initiate leadership and management skills according to good judgment, moral virtues and lawful act;<br><br>
					3. Create a profound understanding in the multi-factorial dimensions of the individual which affect service and well-being in varied settings cross the life span;<br><br>
					4. Implement research methodologies and output in addressing technical-vocational problems to advance quality life;<br><br>
					5. Adopt educational concepts, principles and core values in the concern of stakeholders in diverged settings and enhance personal and professional growth; and <br><br>
					6. Embody values shared by the teaching profession such as love of God, country and people and show respect, honesty, integrity and compassion.
					</p>
				</div>

				<div class="team">
					<h3>BACHELOR OF TECHNICAL-VOCATIONAL TEACHER EDUCATION</h3>
					<h4>Program Outcomes</h4>		
					<p class="description-mission">The BTVTED program aims to:</p>
					<p class="description">1. Demonstrate the competencies required of the Philippine TVET Trainer-Assessors Qualification Framework;<br><br>
					2. Demonstrate broad and coherent, meaningful knowledge and skills in any of the specific fields in technical and vocational education;<br><br>
					3.  Apply with minimal supervision specialized knowledge and skills in any of the specific fields in technical and vocational education;<br><br>
					4. Demonstrate higher level literacy, communication, numeracy, critical thinking, learning skills needed for higher learning;<br><br>
					5. Manifest a deep and principled understanding of the learning processes and the role of the teacher in facilitating these processes in their students; <br><br>
					6. Show deep and principled understanding of how educational processes relate to large historical, social, cultural, and political processes; <br><br>
					7. Apply a wide range of teaching process skills (including curriculum development, lesson planning, materials development, educational assessment, and teaching approaches; and <br><br>
					8. Reflect on the relationship among the teaching process skills, the learning processing in the students, the nature of the content/subject matter, and other factors affecting educational processes in order to constantly improve their teaching knowledge, skills and practices.
					</p>
				</div>

				<div class="team">
					<h3>ADMISSION POLICIES</h3>	
					<p class="description-mission">a. A high school GPA of not lower than 85. <br>
					b. Passing the University Entrance Test with a score of not lower than the set standard for courses with board examination. <br>
					c. Passing an interview with the Department Chairperson or the Campus Dean.
					</p>
				</div>

				<div class="team">
					<h3>RETENTION POLICIES</h3>	
					<p class="description-mission">a. A first year cumulative GPA of 2.5 or better with no failing grade including grades in NSTP. <br>
					b. Passing the Standardized Aptitude Test for Teacher (SATT) before second year with a score equivalent to 70 prcentile. <br>
					c. A second year and third year cumulative GPA of 2.5 or better with no failing grade including NSTP.
					</p>
				</div>

				<div class="team">
					<h3>POLICIES FOR TRANSFEREES AND SHIFTEES</h3>	
					<p class="description-mission">a. Transferee from other schools and shiftee from other courses within the university system shall be admitted to education program if they have a cumulative GPA of 2.0 or better with no failing grade, INC and 4.0. <br>
					b. They are also governed by the retention policies stated previously. <br>
					c. SATT should only be given after completing a minimum of 46 credit units including those grades that are credited from previous school or program. <br>
					d. No transferee or shiftee shall be admitted at the third-year level. <br>
					e. Passing an interview with the Department Chairperson or the Campus Dean.
					</p>
				</div>

				<div class="team">
					<h3>OTHER PROVISIONS</h3>	
					<p class="description-mission">a. Computation of cumulative GPA shall be based on a minimum of 46 units for first year,82 units for second year and 118 units for third year. <br>
					b. This policy shall cover only the teacher education programs of the Cavite State University System. 
					</p>
				</div>

				<div class="team">
					<h3>PLACEMENT PROCEDURES</h3>		
					<p class="description-mission">Internship on practice teaching is done when an education student reach the second semester of his/her fourth year of schooling. This stage is said to be the culmination of all the experiences gained by a student teacher as he/she is exposed in the real world of teaching. <br>
					Before one can go to practice, he/she has to satisfy the following: </p>
					<p class="description">1. Have no failing grades in any of the subject;<br><br>
					2. Must attend the orientation prior to actual deployment in different schools called for by the coordinator of student – teaching upon the approval of the Chairperson, Department of Teacher Education and the Director for Instruction;<br><br>
					3. Conduct demonstration teaching with selected participants, in the presence of the coordinator, Chairperson, Director for Instruction;<br><br>
					4. Must wear the student – teaching uniform;<br><br>
					5. Select/Recommend a school where they will have their practice teaching preferably those institution near their residence to save time, money and effort; and. <br><br>
					6. The pre-service teacher will be deployed by the coordinator for student teaching on the scheduled date.
					</p>
				</div>

				<div class="team">
					<h3>PRACTICE TEACHING PROCESS FLOW</h3>		
					<p class="description-mission">Figure 1. Flow chart of Practice Teaching Process</p>
					<div class="container figure">
						<img src="<?php echo BASE_URL . '/assets/images/dte-practice-teaching-process-flow.png'; ?>">
					</div>
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
	<div class="container chart">
		<img src="<?php echo BASE_URL . '/assets/images/dte-org-chart.png'; ?>">	
	</div>
	<div class="contact">
		<hr>
		<h3>CONTACT INFORMATION:</h3><br>
		<p>
		<i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:0464379505">(046) 437-9505</a> / <a href="tel:0464376659">(046) 437-6659</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong><a href="mailto:cvsu-rosario@gmail.com?">cvsu-rosario@gmail.com</a></strong>
		</p>
	</div>
	<hr>
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