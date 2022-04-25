<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/forms.php"); 

$formsfaculty = array();
$formsOJT = array();
$formsresearch = array();

$formsfaculty = getFacultyForms();
$formsOJT = getOJTForms();
$formsresearch = getResearchForms();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Office of the Director for Instruction - DOWNLOADABLE FORMS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/footer.css'; ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/dform.css'; ?>">
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

	<div class="post-slider">
      <h1 class="slider-title">Downloadable Forms</h1>
  </div>

<div class="container">
	<div class="row dlinks">
		<div class="col-12 col-lg-6 sample">
			<h3>Faculty</h3>
			<div class="content">
				<ul>
					<?php foreach ($formsfaculty as $key => $form): ?>
						<li><a href="<?php echo BASE_URL . '/assets/forms/' . $form['file']; ?>" download><?php echo $form['name'] ?></a></li>
			        <?php endforeach; ?>
				</ul>
			</div>
		</div>
		
		<div class="col-12 col-lg-6 sample">
			<h3>On-the-job Training (OJT)</h3>
			<div class="content">
				<ul>
					<?php foreach ($formsOJT as $key => $form): ?>
						<li><a href="<?php echo BASE_URL . '/assets/forms/' . $form['file']; ?>" download><?php echo $form['name'] ?></a></li>
			        <?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div class="col-12 col-lg-6 sample">
			<h3>Research</h3>
			<div class="content">
				<ul>
					<?php foreach ($formsresearch as $key => $form): ?>
						<li><a href="<?php echo BASE_URL . '/assets/forms/' . $form['file']; ?>" download><?php echo $form['name'] ?></a></li>
			        <?php endforeach; ?>
				</ul>
			</div>
		</div>

	</div>
</div>


<div>
	<h5 class="cvsudformslink"><a href="https://cvsu-rosario.edu.ph/downloadable-forms/">Click here</a> for CHECKLIST and REGISTRAR FORMS!</h5>
</div>
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
</body>
</html>