<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/admindashboard.php"); 
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
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">

        <title>Super Admin Section - Update Account Info</title>

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
                    <a href="dashboard.php" class="btn btn-big">Back to Dashboard</a>
                </div>
                <div class="content dp-box1">
                    <h2 class="page-title">Educational Background - Add</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                        <form action="addeducbackground.php" method="post">
                            <div>
                                <input type="text" name="empid" value="<?php echo $_SESSION['empid']; ?>" class="text-input" hidden>
                                <label>School/Organization Name</label>
                                <input type="text" name="orgname" value="<?php echo $orgname; ?>" class="text-input" required>
                            </div>
                            <div>
                                <label>Course/Specialization</label>
                                <input type="text" name="course" value="<?php echo $course; ?>" class="text-input" required>
                            </div>
                            <div>
                                <label>Start Year</label>
                                <input type="number" maxlength="4" name="startdate" value="<?php echo $startdate; ?>" class="text-input" required>
                            </div>
                            <div>
                                <label>End Year</label>
                                <input type="number" maxlength="4" name="enddate" value="<?php echo $enddate; ?>" class="text-input" required>
                            </div>
                            <div>
                                <button type="submit" name="addeducbg" class="btn btn-big">Submit</button>
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