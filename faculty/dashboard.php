<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
facultyOnly();
$acad = selectAll('current_academic_details');
$info = selectAll('users', ['empid' => $_SESSION['empid']]);
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

        <title>Faculty Section - User Dashboard</title>

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

            var x1="Date: " + month + "-" + dt + "-" + x.getFullYear(); 
            x1 = x1 + "<br>" +  "Time: " + hours + ":" +  minutes + ":" +  seconds + " " + ampm;
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

        <?php include(ROOT_PATH . "/app/includes/facultyHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/facultySidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                <div class="content">
                    <div class="container img-bg dp-box">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12">
                                <div class="row z-depth-3">
                                    <div class="col-sm-3 dpbg rounded-left text-white">
                                        <div class="card-block text-center text-white">
                                            <img class="dp" src="<?php echo BASE_URL . '/assets/images/user-icon.png'; ?>">
                                            <p class="ayinfo">Academic Year: <?php echo $acad[0]['current_academic_year']; ?></p>
                                            <p class="ayinfo">Semester: <?php echo $acad[0]['current_semester']; ?></p><br>
                                            <p class="ayinfo"><span id="ct"></span></p>
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-9 profile-content">
                                        <h3 class="mt-3 text-center">Profile Details</h3>
                                        <hr class="bg-light mt-0 w-50"></hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p >Employee ID:</p> 
                                                <h6><?php echo $info[0]['empid']; ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Department:</p> 
                                                <h6><?php echo $info[0]['department']; ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Name:</p> 
                                                <h6><?php echo $info[0]['lastname'] . ', ' . $info[0]['firstname'] . ' ' . $info[0]['middlename'];?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Position:</p> 
                                                <h6><?php echo $info[0]['position']; ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Birthday:</p> 
                                                <h6><?php echo date('F j, Y', strtotime($info[0]['birthday'])); ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Rank:</p> 
                                                <h6><?php echo $info[0]['rank']; ?></h6>
                                            </div>

                                            <div class="col-sm-6">
                                                <p>Email:</p> 
                                                <h6><?php echo $info[0]['email']; ?></h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Phone Number:</p> 
                                                <h6><?php echo '+63'.$info[0]['contactno']; ?></h6>
                                            </div>
                                        </div>
                                        <a href="edit.php?id=<?php echo $_SESSION['empid']; ?>" class="btn btn-big">Update Details</a>
                                        <div class="row dp-sec">
                                            <div class="col-sm-10">
                                                <h4 class="mt-3">Work Experience/s</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="addworkexp.php" class="dp-button-add"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <hr class="bg-light">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>Org/Company Name</p> 
                                            </div>
                                            <div class="col-sm-3">
                                                <p>Position</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>From</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>To</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Action</p> 
                                            </div>
                                        </div>
                                        <?php  $exp = selectAll('workexperience', ['empid' => $_SESSION['empid']]); ?>
                                        <?php foreach ($exp as $key => $value): ?>
                                            <div class="row cont">
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['companyname']; ?></h6>
                                                </div>
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['position']; ?></h6>
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['startdate']; ?></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6><?php echo $value['enddate']; ?></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="editworkexp.php?edit_id=<?php echo $value['id']; ?>"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="dashboard.php?delete_id=<?php echo $value['id']; ?>"><i class="fas fa-trash"></i></a>      
                                                </div>
                                            </div>
                                        <?php endforeach ?>

                                        <div class="row dp-sec">
                                            <div class="col-sm-10">
                                                <h4 class="mt-3">Educational Background</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="addeducbackground.php" class="dp-button-add"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <hr class="bg-light">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>School Name</p> 
                                            </div>
                                            <div class="col-sm-3">
                                                <p>Course</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>From</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>To</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Action</p> 
                                            </div>
                                        </div>
                                        <?php  $edbg = selectAll('educbackground', ['empid' => $_SESSION['empid']]); ?>
                                        <?php foreach ($edbg as $key => $value): ?>
                                            <div class="row cont">
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['orgname']; ?></h6>
                                                </div>
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['course']; ?></h6>
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['startdate']; ?></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6><?php echo $value['enddate']; ?></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="editeducbackground.php?editeducbg_id=<?php echo $value['id']; ?>"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="dashboard.php?deleteeducbg_id=<?php echo $value['id']; ?>"><i class="fas fa-trash"></i></a>      
                                                </div>
                                            </div>
                                        <?php endforeach ?>

                                        <div class="row dp-sec">
                                            <div class="col-sm-10">
                                                <h4 class="mt-3">Trainings/Seminars Attended</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="addtrainings.php" class="dp-button-add"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <hr class="bg-light">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p>Event Title</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Location</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Speaker</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Date</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>File</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Action</p> 
                                            </div>
                                        </div>
                                        <?php  $trn = selectAll('trainings', ['empid' => $_SESSION['empid']]); ?>
                                        <?php foreach ($trn as $key => $value): ?>
                                            <div class="row cont">
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['eventtitle']; ?></h6>
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['location']; ?></h6>
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['speaker']; ?></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6><?php echo $value['eventdate']; ?></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6><a href="<?php echo BASE_URL . '/assets/trainings/' . $value['file']; ?>" download><?php echo substr($value['file'], 0, 10) . '...'; ?></a></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="edittrainings.php?edittrainings_id=<?php echo $value['id']; ?>"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="dashboard.php?deletetrainings_id=<?php echo $value['id']; ?>"><i class="fas fa-trash"></i></a>      
                                                </div>
                                            </div>
                                        <?php endforeach ?>

                                        <div class="row dp-sec">
                                            <div class="col-sm-10">
                                                <h4 class="mt-3">Awards/Recognitions Received</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="addawards.php" class="dp-button-add"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <hr class="bg-light">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>Event Name</p> 
                                            </div>
                                            <div class="col-sm-3">
                                                <p>Award Name</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Date</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>File</p> 
                                            </div>
                                            <div class="col-sm-2">
                                                <p>Action</p> 
                                            </div>
                                        </div>
                                        <?php  $awrd = selectAll('awards', ['empid' => $_SESSION['empid']]); ?>
                                        <?php foreach ($awrd as $key => $value): ?>
                                            <div class="row cont">
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['eventname']; ?></h6>
                                                </div>
                                                <div class="col-sm-3"> 
                                                    <h6><?php echo $value['awardname']; ?></h6>
                                                </div>
                                                <div class="col-sm-2"> 
                                                    <h6><?php echo $value['awarddate']; ?></h6>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h6><a href="<?php echo BASE_URL . '/assets/awards/' . $value['file']; ?>" download><?php echo substr($value['file'], 0, 10) . '...'; ?></a></h6>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="editawards.php?editawards_id=<?php echo $value['id']; ?>"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="dashboard.php?deleteawards_id=<?php echo $value['id']; ?>"><i class="fas fa-trash"></i></a>      
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                        
                                    </div>
                                </div>      
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