<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
superadminOnly();
$ranks = selectAll('ranks');
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

        <title>Super Admin Section - Approve User Registration</title>

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
                    <a href="index.php" class="btn btn-big">Back to users</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Approve User Registration</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="edit.php" method="post">
                        <div>
                            <label>Employee ID</label>
                            <input type="text" name="empid" value="<?php echo $empid; ?>" class="text-input no-edit" readonly>
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" class="text-input">
                        </div>
                        <div>
                            <label>First Name</label>
                            <input type="text" name="firstname" value="<?php echo $firstname; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="text-input no-edit" readonly>
                        </div>
                        <div>
                            <label>Position</label>
                            <select name="position" class="text-input">
                                <option value="<?php echo $position ?>"><?php echo $position ?></option>
                                <option value="Admin">Admin</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Super Admin">Super Admin</option>
                            </select>
                        </div>
                        <div>
                            <label>Rank</label>
                            <select name="rank" class="text-input">
                                <option value="<?php echo $position ?>"><?php echo $rank ?></option>
                                <?php foreach ($ranks as $key => $value): ?>
                                    <option value="<?php echo $value['rank']; ?>"><?php echo $value['rank']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label>Department</label>
                            <select name="department" class="text-input">
                                <option value="<?php echo $department ?>"><?php echo $department ?></option>
                                <?php  
                                    $dept = selectAll('departments');
                                 ?>
                                 <?php foreach ($dept as $key => $value): ?>
                                    <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
                                 <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="text" name="status" value="Active" class="text-input" hidden>
                        <div>
                            <button type="submit" name="approve-user" class="btn btn-big">Approve Registration</button>
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