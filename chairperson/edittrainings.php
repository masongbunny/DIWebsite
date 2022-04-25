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
                    <h2 class="page-title">Trainings/Seminars - Edit</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                        <form action="edittrainings.php" method="post" enctype="multipart/form-data">
                            <div>
                                <input type="text" name="id" value="<?php echo $id; ?>" class="text-input" hidden>
                                <input type="text" name="empid" value="<?php echo $_SESSION['empid']; ?>" class="text-input" hidden>
                                <label>Event Title</label>
                                <input type="text" name="eventtitle" value="<?php echo $eventtitle; ?>" class="text-input">
                            </div>
                            <div>
                                <label>Location</label>
                                <input type="text" name="location" value="<?php echo $location; ?>" class="text-input">
                            </div>
                            <div>
                                <label>Speaker</label>
                                <input type="text" name="speaker" value="<?php echo $speaker; ?>" class="text-input">
                            </div>
                            <div>
                                <label>Date</label>
                                <input type="date" name="eventdate" value="<?php echo $eventdate; ?>" class="text-input">
                            </div>
                            <div>
                                <label>File <span class="note">(Leave blank if you are not updating the attachment)</span></label>
                                <input type="file" name="file" value="<?php echo $file; ?>" class="text-input">
                            </div>
                            <div>
                                <button type="submit" name="update-training" class="btn btn-big">Submit</button>
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