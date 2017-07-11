<?php 
session_start(); 
include('connection.php');
include('head.php');
$usr=$_SESSION['user_name'];
$sid=$_SESSION['user_id'];
$rs=mysql_query("select * from messages where sid='$sid'",$con);
$rs1=mysql_query("select * from notif",$con);
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BIT Girl's Hostel</a>
            </div>
            <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                       <ul class="dropdown-menu dropdown-messages">
                       <?php
                    if(mysql_num_rows($rs)>0)
					{
						while($row=mysql_fetch_array($rs))
						{
						?>
                        <li>
                            <a href="allmsg.php">
                                <div>
                                    <strong><?php echo $row['msubject']; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $row['mdate']; ?></em>
                                    </span>
                                    
                                </div>
                                <div><?php echo $row['mmsg']; ?></div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <?php } }?>
                        <li>
                            <a class="text-center" href="allmsg.php">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="complaint.php">
                                <div>
                                    <p>
                                        <strong>Complaint</strong>
                                    </p>
                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="permission.php">
                                <div>
                                    <p>
                                        <strong>Permission</strong>
                                    </p>
                                    
                                </div>
                            </a>
                        </li>
                        </ul>
                       
                    <!-- /.dropdown-tasks -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                    <?php
                    if(mysql_num_rows($rs1)>0)
					{
						while($row1=mysql_fetch_array($rs1))
						{
						?>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> <?php echo $row1['nnotif']; ?>
                                    <span class="pull-right text-muted small"><?php echo $row['time']; ?></span>
                                    <span class="pull-right text-muted small">&nbsp; &nbsp;</span>
                                    <span class="pull-right text-muted small"><?php echo $row['ndate']; ?></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } }?>
                        <li>
                            <a class="text-center" href="allnotif.php">
                                <strong>Read All Notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        </ul>
                        </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="student.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="student.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="s_about_us.php"><i class="fa fa-question fa-fw"></i> About Us<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="s_rules.php">Rules & Regulations</a>
                                </li>
                                <li>
                                    <a href="s_hec.php">Hostel Executive Committee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="s_contact_us.php"><i class="fa fa-phone fa-fw"></i> Contact Us</a>
                        </li>
                        <li>
                            <a href="s_gallery.php"><i class="fa fa-camera fa-fw"></i> Gallery</a>
                        </li>
						<!--<li>
                            <a href="registration.php"><i class="fa fa-edit fa-fw"></i> Registration</a>
                        </li>-->
                        <li>
                            <a href="s_fee_pay.php"><i class="fa fa-lock fa-fw"></i> Fee Payment</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
        </div>
        </nav>
