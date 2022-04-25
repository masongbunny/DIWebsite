<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/tracker_dcs.php"); 
adminOnly();

$style_t1 = 'height: 100%;
            width: '. $gen_status .'%;
            background: #6665ee;
            position: absolute;
            border-radius: 10px;';

$count=0;
    

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

        <title>Admin Section - DCS Requirements</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/adminheader.css'; ?>">
        <script src="https://kit.fontawesome.com/f88d2fa247.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            function exportTableToExcel(tableID, filename = ''){
                var downloadLink;
                var dataType = 'application/vnd.ms-excel';
                var tableSelect = document.getElementById(tableID);
                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                
                // Specify file name
                filename = filename?filename+'.xls':'excel_data.xls';
                
                // Create download link element
                downloadLink = document.createElement("a");
                
                document.body.appendChild(downloadLink);
                
                if(navigator.msSaveOrOpenBlob){
                    var blob = new Blob(['\ufeff', tableHTML], {
                        type: dataType
                    });
                    navigator.msSaveOrOpenBlob( blob, filename);
                }else{
                    // Create a link to the file
                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                
                    // Setting the file name
                    downloadLink.download = filename;
                    
                    //triggering the function
                    downloadLink.click();
                }
            }
        </script>

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
                    <a href="index.php" class="btn btn-big">Back to General Tracker</a>
                    <a href="dcs.php" class="btn btn-big">Manage Tracker</a>
                    <form class="search" action="dcs.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                
                <div class="content">
                    <div class="skills-bar">
                        <div class="bar">
                            <div class="bar-info">
                                <span>DCS Submission Status: <?php echo $gen_status; ?>% (<?php echo $submitted_count; ?> / <?php echo $sub; ?>)</span>
                            </div>
                            <div class="progress-line"><span style="<?php echo $style_t1; ?>"></span></div> 
                            
                        </div>
                    </div>
                    <div class="dept-tracker">
                        <a href="das.php" class="disable">DAS</a>
                        <a href="dit.php" class="disable">DIT</a>
                        <a href="dms.php" class="disable">DMS</a>
                        <a href="dte.php" class="disable">DTE</a>
                        <a href="lshs.php" class="disable">LSHS</a>
                    </div>
                    
                    <h2 class="page-title">DCS Submitted Requirements Tracker</h2>
                    
                    <div class="tracker-sorter">
                        <form action="dcs.php" method="post">
                            Sort by Requirement:
                            <select name="id" class="req-sort" required>
                                <option value="<?php echo $sort['req_id']; ?>"></option>
                                <?php foreach ($sorts as $key => $sort): ?>
                                <option value="<?php echo $sort['req_id']; ?>"><?php echo $sort['req_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" name="go" class="disable">GO</button>
                        </form>
                    </div>
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    <div class="container test">
                            <table id = "tblData">
                                <thead>
                                    <th>SN</th>
                                    <th>EmpID</th>
                                    <th>EmpName</th>
                                    <th>ReqName</th>
                                    <th>File Submitted</th>
                                    <th>Date Submitted</th>
                                    <th>Department</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                <tbody>
                                <?php foreach ($requirements as $key => $req): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $req['empid']; ?></td>
                                    <td><?php echo $req['lastname'].', '.$req['firstname']; ?></td>
                                    <td><?php echo $req['req_name']; ?></td>
                                    <td><?php echo $req['file']; ?></td>
                                    <td><?php echo $req['date_submitted']; ?></td> 
                                    <td><?php echo $req['department']; ?></td>    
                                    <td><a href="<?php echo BASE_URL . '/assets/submitted_docs/' . $req['file']; ?>" class="edit" download>download</a></td>
                                    
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                </div>

                <button class="btn btn-big excel" onclick="exportTableToExcel('tblData','DCS Submitted Requirements Data')">Export Table Data</button>
            </div>

            <div class="content sec-below">                    
                    <h2 class="page-title">DCS Faculty Submission Report</h2>
                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                    <div class="container test">
                            <table id = "tblData1">
                                <thead>
                                    <th>SN</th>
                                    <th>EmpID</th>
                                    <th>EmpName</th>
                                    <th>ReqName</th>
                                    <th>Department</th>
                                    <th>Submission Status</th>
                                </thead>
                                <tbody>
                                <?php foreach ($reqlist as $i => $list): ?>
                                    <?php foreach ($userlist as $j => $user): ?>
                                        <tr>
                                            <td><?php echo $count + 1; ?></td>
                                            <td><?php echo $user['empid']; ?></td>
                                            <td><?php echo $user['lastname'].', '.$user['firstname']; ?></td>
                                            <td><?php echo $list['req_name']; ?></td>
                                            <td><?php echo $user['department']; ?></td>
                                            <?php $status=selectOne('requirements_submitted',['req_id' => $list['req_id'], 'empid' => $user['empid']]); ?>
                                            <?php if ($status):?>
                                                <td><font color="green">Submitted</font></td>
                                            <?php else: ?>
                                                <?php $activecheck = selectOne('users', ['empid'=> $user['empid'], 'status' => 'On Leave']); ?>
                                                <?php if ($activecheck): ?>
                                                    <td><font color="orange">On Leave</font></td>
                                                <?php else: ?>
                                                    <td><font color="red">Pending</font></td>
                                                <?php endif; ?>
                                            <?php endif; ?>       
                                        </tr>
                                        <?php $count++; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                </div>
                <button class="btn btn-big excel" onclick="exportTableToExcel('tblData1','DCS Faculty Submission Report')">Export Table Data</button>

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