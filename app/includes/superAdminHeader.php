<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL . "/index.php"; ?>">Office of the Director for Instructions</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['empid'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        Hiya, <?php echo substr($_SESSION['firstname'], 0, 8) . '...'; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo BASE_URL . "/superAdmin/dashboard.php"; ?>">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo BASE_URL . "/logout.php"; ?>">Logout</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>   
        </div>
    </div>
</nav>