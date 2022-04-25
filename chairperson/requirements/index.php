<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/requirements.php"); 
chairpersonOnly();

if(isset($_POST['search-term'])){
    $requirements = searchReqs($_POST['search-term']);
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

        <title>Faculty Section - DI Requirements</title>

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
                    <a href="index.php" class="btn btn-big">Refresh</a>
                    <form class="search" action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <div class="content">
                    <h2 class="page-title">DI Requirements Checklist</h2>
                    <div class="container test">
                    
                            <?php if ($_SESSION['status']=='Active'): ?><table>
                                <thead>
                                    <th>SN</th>
                                    <th>Requirement Name</th>
                                    <th>AY</th>
                                    <th>Semester</th>
                                    <th colspan="1">Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($requirements as $key => $req): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $req['req_name']; ?></td>
                                    <td><?php echo $req['ay']; ?></td>
                                    <td><?php echo $req['sem']; ?></td>
                                    <?php $status=selectOne('requirements_submitted',['req_id' => $req['req_id'], 'empid' => $_SESSION['empid']]); ?>
                                    <?php if ($status): ?>
                                        <td><a class="no-edits">submitted</a></td>
                                        <?php else: ?>
                                        <td><a href="submit.php?submit_id=<?php echo $req['req_id']; ?>" class="edit">submit</a></td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                            <?php else: ?>
                                <p class='leave-head'>You are on leave.<br> <p class='leave'>You are not required to submit any documents on your entire leave duration! Please report to the Office of the Director for Instructions once you're back in office so we can ammend your account status.</p>  
                            <?php endif ?>
                </div>

                <div class="container sec-below">
                        <h2 class="page-title">Submitted Requirements</h2>
                        <div class="container test">
                        <table>
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>File</th>
                            <th>AY</th>
                            <th>Sem</th>
                            <th>Date Submitted</th>
                            <th colspan="1">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($submitted as $key => $entry): ?>
                                <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $entry['req_name'] ?></td>
                                <td><?php echo $entry['file'] ?></td>
                                <td><?php echo $entry['ay'] ?></td>
                                <td><?php echo $entry['sem'] ?></td>
                                <td><?php echo $entry['date_submitted'] ?></td>
                                <td><a href="" class="edit">edit</a></td> 
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
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