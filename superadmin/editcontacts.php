<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/dotm.php"); 
superadminOnly();
$getacad=selectAll('current_academic_details');
$email = $getacad[0]['autonotifemail'];
?>
<?php $years = range(2000, strftime("%Y", time())+1); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">

        <title>Super Admin Section - Update Academic Year Details</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>

    <body>

        <?php include(ROOT_PATH . "/app/includes/superAdminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/superAdminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="dashboard.php" class="btn btn-big">Back to Dashboard</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Update ODI Contact Details</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="editacadyeardetails.php" method="post">
                        <div>
                            <label>Current Email Address: (For auto email notification & password reset)</label>
                            <input type="text" name="autonotifemail" value="<?php echo $autonotifemail; ?>" class="text-input" required>
                        </div>
                        <div>
                            <label>Password: (Please update this if you updated the password of the above email) </label>
                            <input type="password" name="autonotifpassword" value="<?php echo $autonotifemail; ?>" class="text-input" required>
                        </div>
                        <div>
                            <label>Verify Password: </label>
                            <input type="password" name="autonotifpassword" value="<?php echo $autonotifemail; ?>" class="text-input" required>
                        </div>
                        <div>
                            <button type="submit" name="saupdate-details" class="btn btn-big">Update Details</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- // Admin Content -->
        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>
    </body>

</html>