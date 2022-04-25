<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/dotm.php");
$acad = selectAll('current_academic_details');
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

        <title>Admin Section - Admin Dashboard</title>

        <!--Carousel  & BOOTSTRAP CDN-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>

    <body onload=display_ct();>

        <?php include(ROOT_PATH . "/app/includes/superadminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/superadminSidebar.php"); ?>
            <!-- // Left Sidebar -->

            <!-- Admin Content -->
            <div class="admin-content">
                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                <div class="content">
                    <div class="container">
                        <h2 class="page-title">Department of the Month</h2>
                        <div id="dotm-slider" class="owl-carousel">
                            <?php foreach ($entries as $entry): ?>
                            <div class="dotm-content">  
                                <img src="<?php echo BASE_URL . '/assets/images/' . $entry['image']; ?>">
                                <p class="description"><?php echo $entry['caption']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                         <form action="index.php" method="post" enctype="multipart/form-data">
                            <div>
                                <label>Image</label>
                                <input type="file" name="image" class="text-input">
                            </div>
                            <div>
                            <label>Caption</label>
                            <input type="text" name="caption" value="<?php echo $caption ?>" class="text-input">
                        </div>
                            <div>
                            <button type="submit" name="saadd-item" class="btn btn-big">Add Item</button>
                        </div>
                        </form>
                    </div>

                    <div class="container sec-below">
                        <h2 class="page-title">Manage Items</h2>
                        <form action="dashboard.php" method="post">
                            <div>
                                <button type="delete" name="delete-all" class="btn btn-big">Clear All Items</button>
                            </div>
                        </form>
                        <div class="container test">
                        <table>
                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>Caption</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($entries as $key => $entry): ?>
                                <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $entry['image'] ?></td>
                                <td><?php echo $entry['caption'] ?></td>
                                <td><a href="edit_dotm.php?saedit_id=<?php echo $entry['id']; ?>" class="edit">edit</a></td>
                                <td><a href="index.php?sadelete_id=<?php echo $entry['id']; ?>" class="delete">delete</a></td> 
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
        <script src="../assets/js/scripts.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#dotm-slider").owlCarousel({
                items:1,
                itemsDesktop:[1000,1],
                itemsDesktopSmall:[979,1],
                itemsTablet:[768,1],
                itemsMobile:[650,1],
                pagination:true,
                autoPlay:true
            })
        });
    </script>
    </body>
</html>