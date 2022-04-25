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
	<title>Office of the Director for Instructions - Instruction Units - Campus Library</title>

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
					<h1>CAMPUS LIBRARY</h1>
				<p>The College Library, from the time of the establishment of the Cavite College of Arts and Trades on August 8, 1970 up to the middle part of 1973, was located in one of the building.  Its collection which consisted of only 300 technical books was not properly organized.  The Supply Officer acted as the librarian.  In 1973, more courses were offered and enrolment increased so the library was transferred to the second floor of the Administration Building, this time under a professional librarian, Miss Elvira Tamio.  From 1973 to 1982, the library had accumulated a total of 1,250 volumes of books to include few pamphlets and other materials. <br><br>
					<a href="http://172.96.176.20/">Click here</a> to access the Online Public Access Catalog.</p>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<img src="<?php echo BASE_URL . '/assets/images/lib_svg.png'; ?>" alt="Home Banner">
			</div>	
		</div>
	</div>
</div>	
<div class="jumbotron cutter"></div>

<!--MISSION, VISION, FUNCTIONS AND RESPONSIBILITIES-->
	<div class="demo">
		<div class="container">
			<div class="team-heading">
				<h1>MORE ABOUT THE CAMPUS LIBRARY</h1>
			</div>
			<div class="row">
				<div id="info-slider" class="owl-carousel">
					<div class="team">
					<h3>MISSION</h3>	
					<p class="description-mission">The CvSU-CCAT Campus Library shall provide quality and relevant learning resources to support curricular and co-curricular programs in their instructional, research and recreational needs that enhance learners’ development in becoming professional, skilled and morally upright individuals for global competitiveness.</p>
					</div>
					<div class="team">
					<h3>VISION</h3>	
					<p class="description-mission">The CvSU-CCAT Campus Library: For self-sufficient learning through efficient and effective services of learning resources that encourage learners to be competitive and upright.
					</p>
					</div>
					<div class="team">
					<h3>GOALS</h3>	
					<p class="description-mission">1. Shall provide accessible, relevant and up-to-date library collections.
					<br>
					2. Develop innovative quality library services to cater the needs of the clienteles.
					<br>
					3. Strengthen strategic linkages and collaborative partnerships among local and international institutions to address the changing needs of the stakeholders.
					</p>
					</div>
					<div class="team">
					<h3>OBJECTIVES</h3>	
					<p class="description-mission">1. Acquire accessible, relevant, and up-to-date library collections continuously.
					<br>
					2. Utilize appropriate technology to improve library operations and services.
					<br>
					3. Establish stronger connections with varied library consortia to promote cooperation and greater access in terms of facilities, resources, services, and exchange of publications.
					</p>
					</div>

					
					<div class="team">
					<h3>HISTORY</h3>	
					<p class="description-mission">The College Library, from the time of the establishment of the Cavite College of Arts and Trades on August 8, 1970 up to the middle part of 1973 was located in one of the building.  Its collection which consisted of only 300 technical books was not properly organized.  The Supply Officer acted as the librarian.  In 1973, more courses were offered and enrolment increased so the library was transferred to the second floor of the Administration Building, this time under a professional librarian, Miss Elvira Tamio.  From 1973 to 1982, the library had accumulated a total of 1,250 volumes of books to include few pamphlets and other materials. <br>

					On October 1, 1982,  Miss Tamio was appointed registrar.  Miss Nenita T. Nieva, a former elementary school teacher then assumed librarianship.  In the latter part of 1983, Miss Luzviminda G. Molina, now Mrs. Luzviinda M. Bartolome joined the staff as school librarian. 
					<br>
					As chief librarian, Miss Nieva gave priority on collection development by acquiring and purchasing books and periodicals much more with the assistance of the Instructional Improvement Fund (IIF) of the CCAT Parents and Teachers Association. Additions to the collection were also made possible through the book donations from The Asia Foundation.
					<br>
					When Miss Nieva was promoted registrar in 1992, Mrs.  Bartolome assumed her position as college librarian.  She is ably assisted by Miss Celia Gabriel, another professional librarian.  Later, Miss Gabriel resigned and in the middle part of 1999, Mrs. Ma. Marilyn  M. Villena, a former BSIE graduate of this college, was hired as  school librarian up to April 2008.
					<br>
					Last July 2008, the college library was transferred to its new site, at the right wing of the Department of Arts and Sciences Building. Continuous acquisitions of latest books, periodicals and other library resources are being done to improve and update the collections. An internet and wifi access becomes available to support the present collection. The library is well lighted and ventilated. 
					<br>
					From 1992 to January 2019 CvSU-CCAT Campus Library was managed by Mrs. Bartlome, and after her retirement, Ms. Dan Marie F. Navarrete was designated as a Campus Librarian from February 2019 up to present.
					<br>
					At present, the Library is manned by two professional librarians and two support staff with three student assistants.
					</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Reader’s Services or Public Services</h4>		
					<p class="description-mission">Reader’s or Public Services shall refer to those library activities where direct contact with the customer occurs on a daily basis. These services are provided for the use of library materials in circulation, reference, interlibrary loan or borrowing, photocopying, media services and maintenance of book stacks.</p>
					<p class="description"><strong>B. Circulation Section</strong><br>
					Housed in this section are books published in other countries copyrighted from 2006 and below.<br><br>
					<strong>C. Filipiniana Section</strong><br>
					Included in this section are the library’s Filipiniana collection composed of books and library materials written by Filipino authors published in the Philippines and abroad, and books on the Philippines written by foreign authors.<br><br>
					<strong>D. Reference Section</strong><br>
					Encyclopedias, dictionaries, almanacs, directories, fact books, yearbooks, handbooks and manuals, atlases, gazetteers, guidebooks and other books on general information are housed in this section. Materials in this section are for inside use only.<br><br>
					<strong>E. Theses/FS/Narrative Reports Section</strong><br>
					Housed in this section are manuscripts of theses and dissertations submitted by CvSU students, faculty and employees appropriate for the research needs of the University.<br><br>
					<strong>F. Reserve Section</strong><br>
					Housed in this section are the books recommended by the students, faculty and employees of  the University. Library materials in this section are available for a shorter loan period so that everyone can use them.<br><br>
					<strong>G. Periodicals Section</strong><br>
					This section consists of periodical collections of foreign and local journals/magazines and newspapers acquired to by   the University.
				</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Electronic Resources/Audio-Visual Materials Section</h4>		
					<p class="description-mission">This section charges and discharges CD ROMs and other electronic resources.</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Technical Services</h4>		
					<p class="description-mission">These are non-visible processes or activities that are performed by the librarian/s and library staff. Every material added to the library collection is processed in the Technical Services Section before it is brought to the proper section for circulation.</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Referral Services</h4>		
					<p class="description-mission">A referral letter is issued to a student/faculty member who wants to avail of the use of the library facilities and resources of other libraries which are not available at CvSU – CCAT Campus Library.</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Online Resources and E-Resources</h4>		
					<p class="description-mission">Online database such as e-books and e-journals (Proquest, SpingerLink, Philippine E-journals and Emerald Insight). E-resources are also available such as TeknoAklatan Koha ILS and STARBOOKS.</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>WiFi and Internet Services</h4>		
					<p class="description-mission">Library users can access free WiFi connection and use the computers located at the internet section to do research online.</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Other Services</h4>		
					<p class="description-mission">
						<strong>a. Library Information Literacy and User Education</strong><br><br>
						User education emcompasses all types of activities involved in teaching users on how to make the best possible use of library resources, services, and facilities, including formal and informal instruction delivered by a librarian or other staff member one-on-one or in a group.
						<br><br>
						While Library Information Literacy is skill in finding the information one needs, including an understanding of how libraries are organized, familiarity with the resources they provide (Including information formats and automated searched tools), and knowledge of commonly used research  techniques.
						<br>
						>> Library Instruction (Library Orientation and Tours);<br>
						>> Hands-on exercises on the use of information resources, facilities, and equipment;<br>
						>> One-on-one instruction and;<br>
						>> Preparation of users’ guides, handbooks, newsletters and other printed and online library instructional materials. <br><br>

						<strong>b. Library Promotion and Current Awareness Services</strong><br><br>
						Refer to the activities geared toward attracting and gaining interest of library users. Current awareness services shall be the component of library promotion concerned with the dissemination of current information and issues.
					</p>
				</div>

				<div class="team">
					<h3>LIBRARY SECTIONS AND SERVICES OFFERRED</h3>
					<h4>Photocopying, Printing and Scanning Services</h4>		
					<p class="description-mission">To secure the collection from unintended tearing of pages and to save the time of the students in copying the needed information, these services are made available. This is located at the charging desk/control section. Please take note of the copyright restrictions in availing of these services.</p>
				</div>

				<div class="team">
					<h3>LIBRARY PROCEDURES</h3>
					<h4>Borrowing of Books/Materials</h4>		
					<p class="description-mission">
						<div class="container figure">
						<img src="<?php echo BASE_URL . '/assets/images/library_book_borrowing_procedure.png'; ?>">
					</div></p>
				</div>

				<div class="team">
					<h3>LIBRARY PROCEDURES</h3>
					<h4>Returning of Books/Materials</h4>		
					<p class="description-mission">
						<div class="container figure">
						<img src="<?php echo BASE_URL . '/assets/images/library_book_returning_procedure.png'; ?>">
					</div></p>
				</div>

				<div class="team">
					<h3>LIBRARY PROCEDURES</h3>
					<h4>Returning of Books/Materials</h4>		
					<p class="description-mission">
						<div class="container figure">
						<img src="<?php echo BASE_URL . '/assets/images/lib_referral_letter_request.png'; ?>">
					</div></p>
				</div>

				<div class="team">
					<h3>LIBRARY RULES AND REGULATIONS</h3>
					<h4>General Rules</h4>		
					<p class="description-mission">
						Regular users of the library include all bonafide CvSU students, staff and faculty members, alumni and retirees. All other users from outside the University should provide referral letter from the librarian or head of office where they are enrolled/employed, or they need to fill-out Library Usage Form if the said requirement is not available.</p>
					<p class="description">
						a. Students are required to wear their official uniform when entering the library except during Wednesdays or days when some of them do not have their classes like during Fridays. The library shall exempt students who belong to colleges that hold activities upon presentation of request letter signed by the Director of Instruction.
						<br><br>
						b. A Student ID with Library Card Validation and registered in the Koha Library System are permitted to access library resources and services. This ID card is non-transferrable. Misrepresentation by showing someone else’s ID is an offense. Students caught doing such act may be deprived of their library privileges based on the policies stipulated in the student handbook. <br><br>
						c. A referral letter is issued upon request of faculty and students of CvSU who wish to do research in other libraries. <br><br>
						d. Non-CvSU clientele is allowed to use the library any day of the week, from Monday to Friday only upon presentation of a valid ID from their respective institutions/offices where they are enrolled/employed together with a referral letter. Payment of P30.00 as library fee is also required. <br><br>
						e. The CvSU graduate students, administrators, faculty and personnel may borrow a maximum of five (5) books (circulation) and undergraduate students may borrow a maximum of three (3) books (circulation) at a time. <br><br>
						f. Books from the circulation section can be loaned for one (1) week and may be renewed for another week/s if not needed by other users. All materials borrowed must be returned on the date/time due. <br><br>
						g. Reference books, periodicals and manuscripts are limited to room use only and can be borrowed three (3) at a time. <br><br>
						h. Books for LIBRARY ROOM USE ONLY (1 copy each title and copy 1 book) may be borrowed for photocopying but should be returned immediately. <br><br>
						i. Service hours for regular semesters: <br>
						Monday to Friday - 7:00 am to 6:00 pm (no noon break)<br>
						Saturday - 1:00 pm to 5:00 pm <br><br>
						j. Service hours during Mid-Year and semester break <br>
						Monday to Friday - 8:00 am to 5:00 pm (no noon break) <br><br>
						k. Photocopying <br>
						Photocopying of any part of the manuscripts is strictly prohibited. Only abstracts, approval sheets and references are allowed to be reproduced. <br>
						Photocopying time is limited for 15 minutes only. Photocopier machine is available at the Charging Desk/Control Section. <br><br>
						l. Lost Books <br>
         				Lost book charged out of a particular section must be immediately replaced with the same title or subject of recent edition one (1) week after the librarian has been notified of its loss. If the lost book is overdue, fine must be settled. Replacement for lost book should be received at the technical section together with the card of the lost book for processing. <br><br>
					</p>
				</div>

				<div class="team">
					<h3>LIBRARY RULES AND REGULATIONS</h3>
					<h4>General Rules</h4>		
					<p class="description"><br>m. Fines <br>
						Materials returned late shall be charged with overdue fines. Library book fines are as follows: </p>
						<div class="container figure">
						<img src="<?php echo BASE_URL . '/assets/images/library_fines.png'; ?>">
					</div>
					<p class="description">
					<br>n. Baggage Control Desk <br>
					- Bags, briefcases, umbrellas, large envelopes, clear books and folders should be deposited at the baggage counter desk (control desk). All faculty and staff members have designated area where they can deposit their bags/things which is located at the Charging/Circulation Desk.
					<br>
         			- CCTV cameras are installed to monitor the baggage control desk, charging/circulation desk and the whole library area. <br><br>
         			o. Closed Shelf System <br>
         			- Closed shelf system is used at the Vertical/Pamphlets Collection, Periodicals Section, Audiovisual/Multimedia Collection, Reserve Section, Rizaliana, and CvSU-R Collection <br><br>
         			p. Conduct in the library <br>
         			- SILENCE shall be strictly observed in the library. <br>
         			- A student caught/accused of marking, mutilating, destructing books and other library materials shall be suspended after due process. <br>
         			- All patrons are expected to respect the rights of others, therefore disruptive behavior will not be tolerated, (i.e. excessive noise, eating, drinking, loud cell phone usage). <br> 
         			- Library personnel are authorized to send out anybody who violates this rule. <br>
         			- Charging of laptop, cell phones, or any gadgets inside the library are prohibited. <br> 
         			- Designated areas for charging were already provided by the administration.
				</p>
				</div>

				<div class="team">
					<h3>E - LIBRARY RULES AND REGULATIONS</h3>	
					<p class="description-mission">As part of the enhancement of the University library service, computers with Internet access are installed at the Internet Section of the library. These can be used free of charge subject to the following guidelines: </p>
					<p class="description">
					a. Students should strictly observe silence, cleanliness, orderliness and proper decorum inside the area; <br><br>
         			b. Loitering is prohibited; <br><br>
         			c. Students without official business are not allowed to stay inside the laboratory; <br><br>
         			d. Students and outside users are required to leave their validated school ID to the staff on duty. <br><br>
         			e. Bag must be deposited in the baggage counter; <br><br>
         			f. Only valuable materials like money, wallet, cell phone, laptops and other electronic gadgets can be    brought in; <br><br>
         			g. Food, drinks and any form of beverage are not allowed inside; <br><br>
         			h. Students must take care of their personal belongings; <br><br> 
         			i. The staff on duty is not liable for any loss of valuable things; <br><br>
         			j. Staff on duty shall assign the use of computer; <br><br> 
         			k. In case of group work, two students may share the use of a computer; <br><br>
         			l. Students are advised to save documents on their e-mails; <br><br>
         			m. Any malfunction on the units must be immediately reported to the staff on duty; <br><br>
         			n. System facilities are not to be tampered with, obstructed, or modified.    Violation of this will be subjected to disciplinary action based on the provisions of the Cavite State University Student Handbook, c2013, Student    Code of Conduct Section 6, No. 29; <br><br>
         			o. Computer terminals shall be used to access the online catalog, databases, electronic journals and other online reference sources free of charge; <br><br>
         			p. Accessing sites, which are not research-related is strictly prohibited including chatting, games, entertainment, and the like; Youtube can be visited as long as it is for educational purposes. Facebook and other social    sites or alike are prohibited unless permitted. <br><br>
         			q. Downloading of software, pornographic materials and the like is not allowed; <br><br>
         			r. Playing online games is strictly prohibited. Anybody caught on the act is subject for disciplinary action based on the provisions of the Cavite State University Student Handbook, c2013, Student Code of Conduct Section 6, 29.
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
		<img src="<?php echo BASE_URL . '/assets/images/dcs-org-chart.png'; ?>">	
	</div>
	<div class="contact">
		<hr>
		<h3>CONTACT INFORMATION:</h3><br>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;ARIES M. GELERA, MSICT</strong> – Chairperson &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:+639351632872">09351632872</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong><a href="mailto:cvsugelera@gmail.com?">cvsugelera@gmail.com</a></strong>
		</p>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;ALLEN JHON C. MUYOT, MIT </strong>– Program Leader, BSCS &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:+639171731589">09171731589</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong> <a href="mailto:allen.muyot@gmail.com?">allen.muyot@gmail.com</a></strong>
		</p>
		<p>
		<i class="fa fa-user"></i><strong> &nbsp;&nbsp;MARY ANN E. IGNACO, MIT</strong> – Program Leader BSINFOTECH &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;  <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong><a href="tel:+639162036801">09162036801</a></strong> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong> <a href="mailto:maignaco@gmail.com?">maignaco@gmail.com</a></strong>
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