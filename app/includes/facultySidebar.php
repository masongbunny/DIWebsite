
<?php
    $testcounter = 0;
    $table1 = 'requirements_list';
    $tests = selectAll($table1);
    ?>
    <?php foreach ($tests as $key => $req): ?>    
        <?php $status=selectOne('requirements_submitted',['req_id' => $req['req_id'], 'empid' => $_SESSION['empid']]); ?>
        <?php if ($status):?>
        <?php $testcounter=$testcounter+0; ?>
        <?php else:?>
        <?php $testcounter=$testcounter+1; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php 
    $assigned1 = 'Everyone';
    $assigned2 = $_SESSION['department'];
    $assigned3 = $_SESSION['rank'];
    $testcounter1 = 0;
    $tests1 = searchAssignedAnnouncements($assigned1,$assigned2,$assigned3);
    ?>
    <?php foreach ($tests1 as $key => $req): ?>    
        <?php $status=selectOne('announcement_viewed',['id' => $req['id'], 'empid' => $_SESSION['empid']]); ?>
        <?php if ($status):?>
        <?php $testcounter1=$testcounter1+0; ?>
        <?php else:?>
        <?php $testcounter1=$testcounter1+1; ?>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php  $tskmsgs = selectAll('chat', ['ToUser' => $_SESSION['empid'], 'viewed' => '0']);
    $msgcount = count($tskmsgs);
 ?>
 

<div class="left-sidebar">
    <ul>
        <li><a class="first" href="<?php echo BASE_URL . '/faculty/dashboard.php'; ?>">Profile
        </a></li>
        <hr/>

        <li><a href="<?php echo BASE_URL . '/faculty/announcements/index.php'; ?>">Announcements
            <?php if ($testcounter1==0): ?>
                (<span> <?php echo $testcounter1; ?> </span>)
            <?php else: ?>
                (<span style = "color:red;"> <?php echo $testcounter1; ?> </span>)
            <?php endif; ?>
        </a></li>
        <hr/>

        <li><a href="<?php echo BASE_URL . '/faculty/forms/index.php'; ?>">Downloadable Forms
        </a></li>
        <hr/>

        <li><a href="<?php echo BASE_URL . '/faculty/chat/index.php'; ?>">Messages
            <?php if ($msgcount==0): ?>
                (<span> <?php echo $msgcount; ?> </span>)
            <?php else: ?>
                (<span style = "color:red;"> <?php echo $msgcount; ?> </span>)
            <?php endif; ?>
        </a></li>
        <hr/>

        <?php if ($_SESSION['status']=='Active'): ?>
            <li><a href="<?php echo BASE_URL . '/faculty/requirements/index.php'; ?>">Requirements 
                <?php if ($testcounter==0): ?>
                    (<span> <?php echo $testcounter; ?> </span>)
                <?php else: ?>
                    (<span style = "color:red;"> <?php echo $testcounter; ?> </span>)
                <?php endif; ?>
            </a></li>
        <?php else: ?>
            <li><a href="<?php echo BASE_URL . '/faculty/requirements/index.php'; ?>">Requirements (0)
                </a></li>
        <?php endif; ?>
        <hr/>
    </ul>
</div>