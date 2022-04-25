<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/requirements.php"); 
superadminOnly();

if(isset($_POST['search-term'])){
    $reqs = searchReqs($_POST['search-term']);
}

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

        <title>Super Admin Section - Manage Faculty Requirements</title>

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
                    <a href="create.php" class="btn btn-big">Post New Requirement</a>
                    <a href="index.php" class="btn btn-big">Refresh</a>
                    <form class="search" action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <div class="content">
                    <h2 class="page-title">Faculty Requirements</h2>
                    <div class="container test">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Requirement Name</th>
                            <th>Description</th>
                            <th>AY</th>
                            <th>Semester</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($reqs as $key => $req): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $req['req_name']; ?></td>
                                    <td><?php echo $req['description']; ?></td>
                                    <td><?php echo $req['ay']; ?></td>
                                    <td><?php echo $req['sem']; ?></td>
                                    <td><a href="edit.php?edit_id=<?php echo $req['req_id']; ?>" class="edit">edit</a></td>
                                    <td><a href="index.php?delete_id=<?php echo $req['req_id']; ?>" class="delete">delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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