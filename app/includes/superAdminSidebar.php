<?php 
	global $conn;
	$q="SELECT * FROM users WHERE status='Pending'";
	$res=mysqli_query($conn,$q);
 ?>

 <?php  $tskmsgs = selectAll('chat', ['ToUser' => $_SESSION['empid'], 'viewed' => '0']);
    $msgcount = count($tskmsgs);
 ?>

<div class="left-sidebar">
    <ul>
        <li><a class="first" href="<?php echo BASE_URL . '/superadmin/announcements/index.php'; ?>">Announcements</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/dotm/index.php'; ?>">Department of the Month</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/departments/index.php'; ?>">Departments</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/downloadableforms/index.php'; ?>">Downloadable Forms</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/faq/index.php'; ?>">Frequently Asked Questions</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/chat/index.php'; ?>">Messages
        <?php if ($msgcount==0): ?>
                (<span> <?php echo $msgcount; ?> </span>)
            <?php else: ?>
                (<span style = "color:red;"> <?php echo $msgcount; ?> </span>)
            <?php endif; ?>
        </a></li>
        <hr/>
    	<li><a href="<?php echo BASE_URL . '/superadmin/posts/index.php'; ?>">Posts</a></li>
        <hr/>    
        <li><a href="<?php echo BASE_URL . '/superadmin/requirements/index.php'; ?>">Requirements List</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/repository/index.php'; ?>">Requirements Repository</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/tracker/index.php'; ?>">Requirements Submission Tracker</a></li>
        <hr/>
        <li><a href="<?php echo BASE_URL . '/superadmin/team/index.php'; ?>">Team</a></li>
        <hr/>
        <?php if ($_SESSION['position'] == 'Super Admin'): ?>
            <li><a href="<?php echo BASE_URL . '/superadmin/users/index.php'; ?>">Users 
            <?php if (mysqli_num_rows($res)==0): ?>
                (<span> <?php echo mysqli_num_rows($res); ?> </span>)
            <?php else: ?>
                (<span style = "color:red;"> <?php echo mysqli_num_rows($res); ?> </span>)
            <?php endif; ?>
        </a></li>
        <hr/>
        <?php endif ?>
    </ul>
</div>