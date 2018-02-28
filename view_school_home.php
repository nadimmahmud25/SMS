<?php
$this->load->view('../controllers/collect_multiple');
$obj_collect_multiple=new collect_multiple();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to School Management System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style3.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/school_admin_login.css" />
        <script type="text/javascript" src="<?php echo base_url();?>scripts/jsval.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/multiple.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/district_and_thana.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/add_mission_form.css" />
                
        <!--for student serach-------->
                
        <link rel="stylesheet" href="<?php echo base_url();?>themes/base/jquery.ui.all.css">
	<script src="<?php echo base_url();?>scripts/jquery-1.7.2.js"></script>
	<script src="<?php echo base_url();?>ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url();?>ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>ui/jquery.ui.accordion.js"></script>
        <!--for tab-->
        	<script src="<?php echo base_url();?>ui/jquery.ui.tabs.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>css/demos.css">
    </head>
    <body>
        <div id="wrapper">
<!--            <header>-->
                <div class="school_home_banner">
                    <div class="school_home_logo">
                        <?php
            //confirming about school logo exist

    $confirm_of_exist_school_logo=$this->db->query("SELECT * FROM tbl_school_logo WHERE md5(school_id)='$encripted_school_id'");
    $num_rows=$confirm_of_exist_school_logo->num_rows();
    $fetch_logo=$confirm_of_exist_school_logo->row();
    if($num_rows==1){
        echo "<img src='".  base_url().$fetch_logo->img_path."' width='150' height='150'>";
    }
                        ?>
                    </div>
                    <div class="school_head_info">
                        <div class="school_head_info_name">
                    <?php
                    echo $school_info->school_name;
                    ?>                            
                        </div>
                        <div class="school_head_info_established">
                    <?php
                    $obj_collect_multiple->viewEstablishedDate($school_info->established);    
                    ?>                            
                        </div>
                        <div class="school_head_info_location">
                    <?php
                    
                    $thana_id= $school_info->loc_thana;
                    $thana_query_result=$this->db->query("SELECT * FROM tbl_thana WHERE thana_id='$thana_id'");
                    $thana_result=$thana_query_result->row();
                    
                    $district_id= $school_info->loc_district;
                    $district_query_result=$this->db->query("SELECT * FROM tbl_district WHERE district_id='$district_id'");
                    $district_result=$district_query_result->row();
                    echo $thana_result->thana.', ';
                    echo $district_result->district;
                    ?>                            
                        </div>
                    </div>
                </div>
<!--            </header>-->
            <menu id="home_menu_area">
<div id='cssmenu'>
<ul>
   <li><a href='<?php echo base_url();?>view_controller/HomeOfSchool/<?php echo $encripted_school_id; ?>'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Search</span></a>
      <ul>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/SearchStudentBySchoolId/<?php echo $encripted_school_id ?>'><span>Search Student</span></a> </li>
         <li class='has-sub '><a href='<?php echo base_url();?>search_controller/SearchStudentResult/<?php echo $encripted_school_id ?>'><span>Search Result</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewMeritClassWise/<?php echo $encripted_school_id ?>'><span>Merit List</span></a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>View</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Teachers</span></a> </li>
         <li class='has-sub '><a href='#'><span>Staff</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/viewAddedNotice/<?php echo $encripted_school_id;?>'><span>Notice</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewStdResultByBarChart/<?php echo $encripted_school_id ?>'><span>View Result by Chart</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewStudentBarChart/<?php echo $encripted_school_id ?>'><span>View Student by Chart</span></a></li>
      </ul>
   </li>
   
   <li><a href='<?php echo base_url();?>view_controller/viewSyllabus/<?php echo $encripted_school_id ?>'><span>Syllabus</span></a></li>
   <li><a href='<?php echo base_url();?>view_controller/viewRoutine/<?php echo $encripted_school_id ?>'><span>Exam Routine</span></a></li>
   <li><a href='<?php echo base_url();?>view_controller/viewPhotoGallery/<?php echo $encripted_school_id ?>'><span>Gallery</span></a></li>
   <li><a href='#'><span>About School</span></a></li>
   <li><a href='<?php echo base_url();?>view_controller/view_school_admin_login_form/<?php echo $encripted_school_id; ?>'><span>School Admin Login</span></a></li>
</ul>
</div>               
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
<li><a href="<?php echo base_url();?>view_controller/viewSiteMap/<?php echo $encripted_school_id;?>">Sitemap</a></li>
                    <li class="a"><a href="#">Contact Us</a></li>
                </ul>
            </footer>
        </div>
    </body>
</html>
