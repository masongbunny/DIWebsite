<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/departments.php"); 
superadminOnly();

?>
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
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin Section - About Us</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>

    <body>

        <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="<?php echo BASE_URL . '/superadmin/dashboard.php'; ?>" class="btn btn-big">Back to Dashboard</a>
                    <a href="edit.php?edit_about_id=<?php echo $id1; ?>" class="btn btn-big">Update Unit Details</a>
                </div>
                <div class="content">
                    <h2 class="page-title"><?php echo $name1; ?></h2>
                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label><strong>Description:</strong> <?php echo html_entity_decode($description1); ?></label>
                        </div>
                        <div>
                            <label><strong>Image Display:</strong></label><br>
                            <img src="<?php echo BASE_URL . '/assets/images/' . $display_art1; ?>">
                        </div>
                        <div>
                            <label><strong>Department Information:</strong> <?php echo $about_info1; ?></label>
                        </div>
                        <div>
                            <label><strong>Organizational Chart:</strong></label><br>
                            <img src="<?php echo BASE_URL . '/assets/images/' . $org_chart1; ?>">
                        </div>
                        <div>
                            <label><strong>Contact Information:</strong> <br><?php echo $contact1; ?></label>
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