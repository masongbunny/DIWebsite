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

        <title>Super Admin Section - Edit Unit Info</title>

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
                    <a href="index.php" class="btn btn-big">Cancel</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Update Unit Details</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?php echo $id; ?>" class="text-input" hidden>
                        <div>
                            <label>Unit Type</label>
                            <select name="type" class="text-input" required>
                                <option value="<?php echo $type ?>"><?php echo $type ?></option>
                                <option value="Academic">Academic</option>
                                <option value="Non-Academic">Non-Academic</option>
                            </select>
                        </div>
                        <div>
                            <label>Unit Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input" required>
                        </div>
                        <div>
                            <label>Brief Description (MAX 550 CHARACTERS.) </label>
                            <textarea name="description" class="text-input" required><?php echo $description ?></textarea>
                        </div>
                        <div>
                            <label>Display Image</label>
                            <input type="file" name="display_art" value="<?php echo $display_art; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Department Information</label>
                            <textarea name="about_info" id="body" required><?php echo $about_info ?></textarea>
                        </div>
                        <div>
                            <label>Organizational Chart</label>
                            <input type="file" name="org_chart" value="<?php echo $org_chart; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Contact Information</label>
                            <textarea name="contact" class="text-input" required><?php echo $contact ?></textarea>
                        </div>
                        <div>
                            <button type="submit" name="update-unit" class="btn btn-big">Update Info</button>
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