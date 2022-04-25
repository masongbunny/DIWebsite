<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/tracker.php"); 
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

        <title>Super Admin Section - Manual Submission</title>
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
                    <a href="index.php" class="btn btn-big">Back to Repository</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Manual Requirement Submission</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <form action="submit.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Employee ID</label>
                            <input type="text" name="empid" value="<?php echo $empid; ?>" class="text-input" required>
                        </div>
                        <div>
                            <label>Requirement Name</label>
                            <select name="req_id" class="text-input" required>
                                <option value=""></option>
                                <?php foreach ($sorts as $key => $sort): ?>
                                <option value="<?php echo $sort['req_id']; ?>"><?php echo $sort['req_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label>File</label>
                            <input type="file" name="file" value="<?php echo $empid; ?>" class="text-input" required>
                        </div>
                        <div>
                            <button type="submit" name="manual-submit-requirement" class="btn btn-big">Submit Requirement</button>
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