<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/announcements.php"); 
adminOnly();

if(isset($_POST['search-term'])){
    $announces = searchAnnounce($_POST['search-term']);
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

        <title>Admin Section - Manage Announcements</title>

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
                    <a href="create.php" class="btn btn-big">Post New Announcement</a>
                    <a href="index.php" class="btn btn-big">Manage Announcements</a>
                    <form class="search" action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                
                <div class="content">
                    <h2 class="page-title">Announcements</h2>
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    <div class="container test">
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Assignee</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($announces as $key => $announce): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $announce['title']; ?></td>
                                    <td><?php echo $announce['assigned_to']; ?></td>
                                    <td><a href="view.php?view_id=<?php echo $announce['id']; ?>" class="disable">view</a></td>
                                    <td><a href="edit.php?edit_id=<?php echo $announce['id']; ?>" class="edit">edit</a></td>
                                    <td><a href="index.php?adelete_id=<?php echo $announce['id']; ?>" class="delete">delete</a></td>
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