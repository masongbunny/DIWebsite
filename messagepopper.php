<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/users.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message Popper</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . '/assets/css/popper.css'; ?>">
	<script src="<?php echo BASE_URL . '/assets/js/sweetalert2.all.min.js'; ?>"></script>
	<script type="text/javascript">
			Swal.fire({
			  allowEnterKey: false,
			  closeOnEsc: false,
			  allowOutsideClick: false,
			  title: "<?php echo $_SESSION['title']; ?>",
			  text: "<?php echo $_SESSION['text']; ?>",
			  icon: "<?php echo $_SESSION['icon']; ?>",
			  showCancelButton: false,
			  confirmButtonColor: '#3085d6',
			  confirmButtonText: 'CLOSE'
			}).then((result) => {
			  if (result.isConfirmed) {
			    location = "<?php echo $_SESSION['location']; ?>"
			  }
			})
		</script>
</body>
</html>