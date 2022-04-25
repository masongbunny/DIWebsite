<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/requirements.php"); 
chairpersonOnly();
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

        <title>Faculty Section - Edit Submitted Requirement</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>

    <body>

        <?php include(ROOT_PATH . "/app/includes/chairpersonHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/chairpersonSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="index.php" class="btn btn-big">Cancel</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Edit Submitted Document</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <form action="submit.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="req_id" value="<?php echo $req_id ?>" class="text-input" hidden>
                        <input type="text" name="empid" value="<?php echo $empid ?>" class="text-input" hidden>
                        <div>
                            <label>Requirement Name</label>
                            <input type="text" name="req_name" value="<?php echo $req_name?>" class="text-input no-edit" readonly>
                        </div>
                        <div>
                            <label>File</label>
                            <input type="file" name="file" class="text-input">
                        </div>
                        <div>
                            <button type="submit" name="update-document" class="btn btn-big">Update Document</button>
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