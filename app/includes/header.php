<?php
$departments = selectAllDepartmentNotODI('departments');
//dd(count($departments));
 ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">Office of the Director for Instructions</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo BASE_URL . "/index.php"; ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo BASE_URL . "/about.php"; ?>">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Instruction Units</a>
					
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php foreach ($departments as $key => $values): ?>
						<?php if ($key == 0): ?>
							<a class="dropdown-item" href="units.php?id=<?php echo $values['id'];?>"><?php echo $values['name']; ?></a>
						<?php else: ?>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="units.php?id=<?php echo $values['id'];?>"><?php echo $values['name']; ?></a>
						
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Services</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo BASE_URL . "/newsandupdates.php"; ?>">News and Updates</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo BASE_URL . "/downloadableforms.php"; ?>">Downloadable Forms</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo BASE_URL . "/faq.php"; ?>">Frequently Asked Questions</a>
					</div>
				</li>
				<?php if (isset($_SESSION['empid'])): ?>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <?php echo substr($_SESSION['firstname'], 0, 8) . '...'; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        	<?php 
                        	$dashboard;
                        	if ($_SESSION['position'] === 'Faculty') {
                        		$dashboard = "Faculty";
                        	}elseif ($_SESSION['position'] === 'Chairperson') {
                        		$dashboard = "Chairperson";
                        	}elseif ($_SESSION['position'] === 'Admin') {
                        		$dashboard = "Admin";
                        	}elseif ($_SESSION['position'] === 'Super Admin') {
                        		$dashboard = "SuperAdmin";
                        	}
                        	?>
                            <a class="dropdown-item" href="<?php echo BASE_URL . '/' . $dashboard . '/dashboard.php'; ?>">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo BASE_URL . "/logout.php"; ?>">Logout</a>
                        </div>
                    </li>
               	<?php else: ?>
					<li class="nav-item">
						<a class="nav-link portal" href="<?php echo BASE_URL . "/login.php"; ?>">Portal</a>
					</li>
				<?php endif ?>
			</ul>	
		</div>
	</div>
</nav>