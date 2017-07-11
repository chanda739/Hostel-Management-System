<?php 
include('connection.php');
$rs=mysql_query("select * from admin_msg limit 3",$con);
$rs1=mysql_query("select * from visit_notif",$con);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bit Girls hostel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                <div class="navbar-brand">BIT Girl's Hostel</div>
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
                            <a href=#>
                                <div>
                                    <strong><?php echo $row['amsub']; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $row['amdate']; ?></em>
                                    </span>
                                    
                                </div>
                                <div><?php echo $row['amcom']; ?></div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <?php } }?>
                        <li>
                            <a class="text-center" href="admin_allmsg.php">
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
                                    <i class="fa fa-comment fa-fw"></i> <?php echo $row1['sid']; ?>
                                    <span class="pull-right text-muted small"><?php echo $row1['vout']; ?></span>
                                    <span class="pull-right text-muted small">&nbsp; &nbsp;</span>
                                    <span class="pull-right text-muted small"><?php echo $row1['visit']; ?></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php } }?>
                        <li>
                            <a class="text-center" href="admin.php">
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
                        <li><a href="admin_settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="admin.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="a_about_us.php"><i class="fa fa-question fa-fw"></i> About Us<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="a_rules.php">Rules & Regulations</a>
                                </li>
                                <li>
                                    <a href="a_hec.php">Hostel Executive Committee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="a_contact_us.php"><i class="fa fa-phone fa-fw"></i> Contact Us</a>
                        </li>
                        <li>
                            <a href="a_gallery.php"><i class="fa fa-camera fa-fw"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="a_fee_pay.php"><i class="fa fa-lock fa-fw"></i> Fee Payment</a>
                        </li>
                       
                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
        
        
        <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>