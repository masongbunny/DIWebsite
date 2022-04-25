<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/team.php"); 
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

        <title>Super Admin Section - Manage Team Members</title>

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

    <body>

        <?php include(ROOT_PATH . "/app/includes/superAdminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/superAdminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="content">
                    <h2 class="page-title">TEAM MEMBERS</h2>
                    <div class="container test">
                        <table>
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                                <?php foreach ($teams as $key => $team): ?>
                                    <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $team['name'] ?></td>
                                    <td><?php echo $team['position'] ?></td>
                                    <td><?php echo $team['image'] ?></td>
                                    <td><a href="edit.php?edit_id=<?php echo $team['id']; ?>" class="edit">edit</a></td>
                                    <td><a href="index.php?sadelete_id=<?php echo $team['id']; ?>" class="delete">delete</a></td>            
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="container img-bg sec-below">
                    <h2 class="page-title">Add New Member</h2>
                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-8 left">
                            <form action="index.php" method="post" enctype="multipart/form-data">
                                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                                <div>
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo $name ?>" class="text-input" required>
                                </div>
                                <div>
                                    <label>Position</label>
                                    <input type="text" name="position" value="<?php echo $position ?>" class="text-input" required>
                                </div>
                                <div>
                                    <label>Image</label>
                                    <input type="file" name="image" class="text-input" required>
                                </div>
                                <div>
                                    <button type="submit" name="add-member" class="btn btn-big">Add Member</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-4 right-team">
                            <div id="dotm-slider" class="owl-carousel">
                                <?php foreach ($teams as $team): ?>
                                <div class="dotm-content">  
                                    <img src="<?php echo BASE_URL . '/assets/images/' . $team['image']; ?>">
                                    <p class="description"><?php echo $team['name'] . ' - ' . $team['position']; ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>
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

