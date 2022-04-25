<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/dotm.php");
adminOnly();
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
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">

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

        <script>
            function display_ct() {
            var x = new Date()
            var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            hours=hours.toString().length==1? 0+hours.toString() : hours;

            var minutes=x.getMinutes().toString()
            minutes=minutes.length==1 ? 0+minutes : minutes;

            var seconds=x.getSeconds().toString()
            seconds=seconds.length==1 ? 0+seconds : seconds;

            var month=(x.getMonth() +1).toString();
            month=month.length==1 ? 0+month : month;

            var dt=x.getDate().toString();
            dt=dt.length==1 ? 0+dt : dt;

            var x1=month + "/" + dt + "/" + x.getFullYear(); 
            x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
            document.getElementById('ct').innerHTML = x1;
            display_c7();
             }
             function display_c7(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
            }
            display_c7()
        </script>
    </head>

    <body onload=display_ct();>

        <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="edit.php?id=<?php echo $_SESSION['empid']; ?>" class="btn btn-big">Update Account Info</a>
                    <a href="editacadyeardetails.php" class="btn btn-big">Update Academic Year Details</a>
                </div>
                <div class="content">
                    <h2 class="page-title">Admin Dashboard</h2>
                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                    <div class="container img-bg">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 col-lg-5 left">
                                <p>Date/Time: <span id="ct"></span></p>
                                <?php if (isset($_SESSION['empid'])): ?>
                                    <p>Welcome, <?php echo $_SESSION['firstname']; ?>!</p><br>
                                <?php endif; ?>
                                <br>
                                <p>Academic Year: <?php echo $acad[0]['current_academic_year']; ?></p>
                                <p>Semester: <?php echo $acad[0]['current_semester']; ?></p>
                            </div>
                            <div class="col-12 col-lg-7 right">
                                <img src="<?php echo BASE_URL . '/assets/images/prof.svg'; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="container sec-below">
                        <h2 class="page-title">Department of the Month</h2>
                        <div id="dotm-slider" class="owl-carousel">
                            <?php foreach ($entries as $entry): ?>
                            <div class="dotm-content">  
                                <img src="<?php echo BASE_URL . '/assets/images/' . $entry['image']; ?>">
                                <p class="description"><?php echo $entry['caption']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                         <form action="dashboard.php" method="post" enctype="multipart/form-data">
                            <div>
                                <label>Image</label>
                                <input type="file" name="image" class="text-input">
                            </div>
                            <div>
                            <label>Caption</label>
                            <input type="text" name="caption" value="<?php echo $caption ?>" class="text-input">
                        </div>
                            <div>
                            <button type="submit" name="add-item" class="btn btn-big">Add Item</button>
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
                                <td><a href="edit_dotm.php?edit_id=<?php echo $entry['id']; ?>" class="edit">edit</a></td>
                                <td><a href="dashboard.php?sadelete_id=<?php echo $entry['id']; ?>" class="delete">delete</a></td> 
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