<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/chat.php"); ?>
<?php foreach ($chats as $key => $value): 
$today = strtotime(date('Y-m-d', strtotime('today'))); 
$created=strtotime(date('Y-m-d', strtotime($value['created_at'])));
$secs = $today-$created;
$days = $secs / 86400; 
if ($days >= 30) {
    $del=delete('chat',$value['id']);
}
?>

<?php endforeach; ?>

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

        <title>Super Admin Section - Manage Departments</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>

    <body onload="">

        <?php include(ROOT_PATH . "/app/includes/superAdminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/superAdminSidebar.php"); ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="container dp-box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 rounded left-chat text-white">
                                    <h4>Messages</h4>
                                    <hr class="bg-white">
                                    <div class="row">
                                        <div class="col-md-12 modal-body">
                                            <?php foreach ($unique_arr as $key => $value): ?>
                                            <div>
                                                <?php
                                                    $user = selectAll('users', ['empid' => $value['FromUser']]);
                                                ?>                                         
                                                <?php foreach ($user as $key => $val): ?>    
                                                    <a class="namelnk" href="index.php?from_id=<?php echo $value['FromUser']; ?>"><?php echo $val['firstname'].' '.$val['lastname']; ?></a>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>         
                                        <div class="row">
                                            <div class="col-md-12 center sendmsg">
                                                <label>Send new message to: </label>
                                                <select onChange="window.location.href=this.value" class="text-input pb-10" required>
                                                    <option></option>
                                                         <?php foreach ($users as $key => $value): ?>
                                                    <option value="index.php?from_id=<?php echo $value['empid']; ?>"><?php echo $value['firstname'] . ' ' . $value['lastname']; ?></option>
                                                         <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 rounded">
                                    <?php if (isset($_GET['from_id'])): ?>
                                    <?php  
                                        $user = selectAll('users', ['empid' => $_GET['from_id']]);
                                    ?>
                                    <?php foreach ($user as $key => $val): ?>
                                        <h4><?php echo $val['firstname'].' '.$val['lastname']; ?></h4>
                                    <?php endforeach; ?>                        
                                    <hr class="bg-dark">
                                    <div class="row">
                                        <div class="col-md-12 modal-body">
                                        <?php foreach ($msgs as $key => $value): ?>
                                        <?php if ($value['FromUser'] == $_SESSION['empid']): ?>
                                            <div class="txtboxl">
                                                <p class="txtcntntl">
                                                <?php echo $value['message']; ?>
                                                </p> 
                                            </div>
                                        <?php else: ?>
                                            <div class="txtboxr">
                                                <p class="txtcntntr">
                                                    <?php echo $value['message']; ?>
                                                </p> 
                                            </div>
                                        <?php endif; ?>
                                        <?php endforeach ?>
                                        </div>
                                    </div>
                                    <form action="index.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                            <div class="col-md-10 footermsg">
                                                <textarea name="message" class="form-control" required><?php echo $message; ?></textarea>
                                                <input type="text" name="ToUser" value="<?php  echo $ToUser; ?>" hidden/>
                                            </div>
                                            <div class="col-md-2">
                                                <button id="send" type="submit" name="new-message" class="btn btn-primary sendbtn">Send</button>
                                            </div>
                                        
                                    </div>
                                    </form>
                                     <?php  else: ?>
                                        <h4>Conversation</h4>
                                        <hr class="bg-dark">
                                    <?php endif; ?>
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
        <script src="../../assets/js/scripts.js"></script>

    </body>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#send").on("click",function(){
                $.ajax({
                    url:"insertMesssage.php",
                    method:"POST";
                    data:{
                        fromUser: $("#fromUser").val(),
                        fromUser: $("#toUser").val(),
                        fromUser: $("#message").val()
                    },
                    dateType:"text",functionsuccess:function(data)
                    {
                        $("#message").val("");
                    }
                });
            });
        });
    </script>
</html>