<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/dotm.php"); 
adminOnly();
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

        <title>Admin Section - Update Academic Year Details</title>

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
                    <a href="dashboard.php" class="btn btn-big">Back to Dashboard</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Update Current Academic Year Details</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="editacadyeardetails.php" method="post">
                        <div >
                            <label>Academic Year</label>
                            <div>
                            <select name="ay1" class=" year" required>
                              <option value="<?php echo $ay1; ?>"><?php echo $ay1; ?></option>
                              <?php foreach($years as $year) : ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <span> 
                                <select name="ay2" class="year" required>
                              <option value="<?php echo $ay2; ?>"><?php echo $ay2; ?></option>
                              <?php foreach($years as $year) : ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                              <?php endforeach; ?>
                            </select>
                            </div>
                            </span>   
                        </div>
                        <div>
                            <label>Semester</label>
                            <select name="current_semester" class="text-input" required>
                                <option value="<?php echo $current_semester ?>"><?php echo $semester ?></option>
                                <option value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Midyear">Midyear</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" name="update-details" class="btn btn-big">Update Details</button>
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