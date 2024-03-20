<?php
$currentUser = $this->session->userdata('login_user');


date_default_timezone_set("Asia/Colombo");
//echo date_default_timezone_get();
// var_dump($currentUser);
$Branch_Name = $currentUser[0]->B_name;
$Branch_Code = $currentUser[0]->B_Code;
//var_dump($Branch_Name);


$receiver = $currentUser[0]->U_ID;

$result ['MessageData'] = $this->Db_model->getfilteredData("SELECT 
                                                                    id,
                                                                    tbl_users.Display_Name,
                                                                    tbl_users.Image,
                                                                    sender,
                                                                    message,
                                                                    tbl_messages.Status,
                                                                    Trans_time,
                                                                    recever
                                                                FROM
                                                                    tbl_messages
                                                                        INNER JOIN
                                                                    tbl_users ON tbl_users.U_ID = tbl_messages.sender
                                                                    where recever=$receiver order by Trans_time DESC ");

$result ['Messagecount'] = $this->Db_model->getfilteredData("SELECT count(id) as Count FROM tbl_messages WHERE status='0' and recever='$receiver'");
$Messagecount = $result ['Messagecount'];
$MessageData = $result ['MessageData'];


//var_dump($Messagecount);die;


$result ['Notifications'] = $this->Db_model->getfilteredData("select * from tbl_notifications where Is_Display = 0");
$Notifications = $result ['Notifications'];




//var_dump($MessageData);die;
?>


<?php
$currentUser = $this->session->userdata('login_user');
$Image = $currentUser[0]->Image;
$User_Name = $currentUser[0]->Display_Name;
?>













<!-- <div id="headerbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-brown">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-pencil"></i></div>
                            </div>
                            <div class="tile-footer">
                                Create Post
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-grape">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-group"></i></div>
                                <div class="pull-right"><span class="badge">2</span></div>
                            </div>
                            <div class="tile-footer">
                                Contacts
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-primary">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                                <div class="pull-right"><span class="badge">10</span></div>
                            </div>
                            <div class="tile-footer">
                                Messages
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-inverse">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-camera"></i></div>
                                <div class="pull-right"><span class="badge">3</span></div>
                            </div>
                            <div class="tile-footer">
                                Gallery
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-midnightblue">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-cog"></i></div>
                            </div>
                            <div class="tile-footer">
                                Settings
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <a href="#" class="shortcut-tile tile-orange">
                            <div class="tile-body">
                                <div class="pull-left"><i class="fa fa-wrench"></i></div>
                            </div>
                            <div class="tile-footer">
                                Plugins
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
<header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner" style="border-top: 0px red solid; box-shadow: 5px 5px 7px #666; background-color: #303f4e">

    <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
        <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
    </span>

    <a class="navbar-brand" href="">HRMS</a>

<!--            <span id="trigger-infobar" class="toolbar-trigger toolbar-icon-bg">
                <a data-toggle="tooltips" data-placement="left" title="Toggle Infobar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
            </span>-->




    <ul class="nav navbar-nav toolbar pull-right">

        <div style="color: #ffffff; float: left; font-size: 16px; margin: 5px; margin-right: 60px"><?php echo "Today is " . date("Y-m-d") . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . date("l"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="width: 40px;" src="<?php echo base_url(); ?>assets/img/happy.png">Good Day Smile : <?php echo $User_Name; ?>  </div>
        <!--<div style="color: #ffffff; float: left; font-size: 16px; margin: 5px; margin-right: 50px"><?php echo $Branch_Name; ?></div>-->

        <li class="dropdown toolbar-icon-bg">
            <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">
                <span class="icon-bg">
                    <i class="fa fa-fw fa-ellipsis-h"></i>
                </span>
            </a>
        </li>

        <!--                <li class="dropdown toolbar-icon-bg demo-search-hidden">
                            <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>
        
                            <div class="dropdown-menu dropdown-alternate arrow search dropdown-menu-form">
                                <div class="dd-header">
                                    <span>Search</span>
                                    <span><a href="#">Advanced search</a></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
        
                                    <span class="input-group-btn">
        
                                        <a class="btn btn-primary" href="#">Search</a>
                                    </span>
                                </div>
                            </div>
                        </li>-->

        <li class="toolbar-icon-bg demo-headerdrop-hidden">
            <a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="fa fa-fw fa-arrows-alt"></i></span></i></a>
        </li>


        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-info"></span></a>
            <div class="dropdown-menu dropdown-alternate notifications arrow">
                <div class="dd-header">
                    <span>Notifications</span>
                    <span><a href="#">Settings</a></span>
                </div>
                <div class="scrollthis scroll-pane">
                    <ul class="scroll-content">


<?php foreach ($Notifications as $t_data) { ?>



                            <li class="">
                                <a href="<?php echo base_url(); ?>Leave_Transaction/Leave_Approve/" class="notification-info">
                                    <div class="notification-icon"><i class="fa fa-user fa-fw"></i></div>
                                    <div class="notification-content"><?php echo $t_data->Notification; ?></div>

                                </a>
                            </li>

<?php }
?>    



                        <!--                                <li class="">
                                                            <a href="#" class="notification-success">
                                                                <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                                                                <div class="notification-content">Updates pushed successfully</div>
                                                                <div class="notification-time">12m</div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="notification-primary">
                                                                <div class="notification-icon"><i class="fa fa-users fa-fw"></i></div>
                                                                <div class="notification-content">New users request to join</div>
                                                                <div class="notification-time">35m</div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="notification-danger">
                                                                <div class="notification-icon"><i class="fa fa-shopping-cart fa-fw"></i></div>
                                                                <div class="notification-content">More orders are pending</div>
                                                                <div class="notification-time">11h</div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="notification-primary">
                                                                <div class="notification-icon"><i class="fa fa-arrow-up fa-fw"></i></div>
                                                                <div class="notification-content">Pending Membership approval</div>
                                                                <div class="notification-time">2d</div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" class="notification-info">
                                                                <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                                                                <div class="notification-content">Succesfully updated to version 1.0.1</div>
                                                                <div class="notification-time">40m</div>
                                                            </a>
                                                        </li>-->
                    </ul>
                </div>
                <div class="dd-footer">
                    <a href="#">View all notifications</a>
                </div>
            </div>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span><span class="badge badge-grape"><?php echo $Messagecount[0]->Count; ?></span></a>
            <div class="dropdown-menu dropdown-alternate messages arrow">
                <div class="dd-header">
                    <span>Messages</span>
                    <!--<span><a href="#">Settings</a></span>-->
                </div>

                <div class="scrollthis scroll-pane">
                    <ul class="scroll-content">



<?php foreach ($MessageData as $m_data) { ?>
                            <li class="">
                                <a href="<?php echo base_url(); ?>Message/Receive_Message">
                                    <img class="msg-avatar" src="<?php echo base_url(); ?>assets/images/Employees/<?php echo $m_data->Image; ?>" alt="avatar" />
                                    <div class="msg-content">
                                        <span class="name"><?php echo $m_data->Emp_Full_Name; ?></span>
                                        <span class="msg"><?php echo $m_data->message; ?></span>
                                    </div>

                                </a>
                            </li>
<?php }
?> 




                    </ul>
                </div>

                <div class="dd-footer"><a href="<?php echo base_url(); ?>Message/Receive_Message">View all messages</a></div>
            </div>
        </li>



        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-user"></i></span></a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="#"><span class="pull-left">My Profile</span> <span><i class="pull-right fa fa-user"></i></span></a></li>
                <li><a href="<?php echo base_url(); ?>Tools/Password_change"><span class="pull-left">Change Password</span> <i class="pull-right fa fa-key"></i></a></li>

                <li><a href="<?php echo base_url() . "index.php/login/logout/" ?>"><span class="pull-left">Sign Out</span> <i class="pull-right fa fa-sign-out"></i></a></li>
            </ul>
        </li>

    </ul>

</header>