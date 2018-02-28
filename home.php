<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to School Management System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style3.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/admin.css" />
        <script type="text/javascript" src="<?php echo base_url();?>scripts/jsval.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/multiple.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/district_and_thana.js"></script>
    </head>
    <body>
        <div id="wrapper">
<!--            <header>-->
                <div class="main_home_banner">
                    <img src="<?php echo base_url(); ?>image/test.png">
                </div>
<!--            </header>-->
            <menu id="home_menu_area">
                <ul id="home_menu">
                    <?php
                    $admin_id=$this->session->userdata("admin_id");
                    if(!empty($admin_id)){
                        ?>
                    <li id="first_menu">
                        <a href="<?php echo base_url();?>view_controller/viewAdminHome.html">Home</a>
                    </li>     
                    <li id="first_menu">
                        <a href="<?php echo base_url();?>view_controller/viewAddSchool.html">Add School</a>
                    </li>     
                    <li id="first_menu">
                        <a href="<?php echo base_url();?>view_controller/viewManageSchool.html">Manage School</a>
                    </li>     
                    <li id="first_menu">
                        <a href="<?php echo base_url();?>login_controller/AdminLoginOut.html">Logout</a>
                    </li>     
                    <?php
                    }
                    else{
                    ?>
                    <li id="first_menu">
                        <a href="<?php echo base_url();?>view_controller/index.html">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>view_controller/viewSelectSchool.html">Select School</a>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url();?>view_controller/viewAdminLogin.html">Admin Panel</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>view_controller/ViewContactUs.html">Contact us</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>                
            </menu>
            
<div id="home_container">
    <?php
   echo $content;
   ?>
  </div>
            <footer id="footer">
                    Copyright &copy; 2013. All rights reserved
                <ul>
                    <li><a href="<?php echo base_url();?>view_controller/index.html">Home</a></li>
                    <li id="footer_select_school"><a  href="<?php echo  base_url();?>view_controller/viewSelectSchool.html">Select School</a></li>
                    <li class="a"><a href="<?php echo base_url();?>view_controller/ViewContactUs.html">Contact Us</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>
