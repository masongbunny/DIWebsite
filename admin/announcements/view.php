<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/announcements.php"); 
adminOnly();
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

        <title>Admin Section - View Announcement</title>

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
                    <a href="index.php" class="btn btn-big">BACK</a>
                </div>
                <div class="content">
                    <h2 class="page-title"><?php echo $title; ?></h2>
                    <div class="img-show">  
                        <img src="<?php echo BASE_URL . '/assets/announcements/' . $file; ?>">
                    </div>
                    <div class="announce-content">
                        <h6 ><?php echo html_entity_decode($content); ?></h6>
                    </div>
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