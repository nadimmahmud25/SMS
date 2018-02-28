<?php
if ($this->session->userdata("school_admin_user_key")) {
    $this->load->view('../controllers/collect_multiple');
    $obj_collect_multiple = new collect_multiple();
    $encripted_school_id=$this->session->userdata("school_id");
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>Dashboard | Admin Panel</title>

            <link rel="stylesheet" href="<?php echo base_url(); ?>css/school_admin_home_layout.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/add_mission_form.css" type="text/css" media="screen" />
            <script src="<?php echo base_url(); ?>scripts/jquery-1.5.2.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>scripts/hideshow.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>scripts/jquery.tablesorter.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.equalHeight.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>scripts/district_and_thana.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>scripts/multiple.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jsval.js"></script>
            <script type="text/javascript">
                $(document).ready(function() 
                { 
                    $(".tablesorter").tablesorter(); 
                } 
            );
                $(document).ready(function() {

                    //When page loads...
                    $(".tab_content").hide(); //Hide all content
                    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
                    $(".tab_content:first").show(); //Show first tab content

                    //On Click Event
                    $("ul.tabs li").click(function() {

                        $("ul.tabs li").removeClass("active"); //Remove any "active" class
                        $(this).addClass("active"); //Add "active" class to selected tab
                        $(".tab_content").hide(); //Hide all tab content

                        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
                        $(activeTab).fadeIn(); //Fade in the active ID content
                        return false;
                    });

                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $('.column').equalHeight();
                });
            </script>

        </head>


        <body>
            <?php
            $query_school_by_encripted_school_id = $this->db->query("SELECT * FROM tbl_add_school WHERE md5(school_id)='$encripted_school_id'");
            if ($query_school_by_encripted_school_id->num_rows() == 1) {
                $school_info = $query_school_by_encripted_school_id->row();
            }
            //         confirming about img exist

            $confirm_of_exist_school_logo = $this->db->query("SELECT * FROM tbl_school_logo WHERE md5(school_id)='$encripted_school_id'");
            $num_rows = $confirm_of_exist_school_logo->num_rows();
            ?>
            <header id="header">
                <hgroup>
                    <div class="header_left">
                        <div class="home_icon">
                            <a href="<?php echo base_url(); ?>view_controller/HomeOfSchoolAdmin/<?php echo $encripted_school_id; ?>">
                                <img src="<?php echo base_url(); ?>image/home.png" width="60" height="50">
                            </a>
                        </div> 
                        <div class="header_left_admin_greeting">
                            <h1>
                                Welcome:
                                <?php
                                echo $school_info->school_admin_user_name;
                                ?>
                            </h1>
                        </div>
                    </div>
                    <h2 class="section_title">
                        <?php
                        echo "Admin Dashboard of " . $school_info->school_name;
                        ?>
                    </h2><div class="btn_view_site">
                        <a href="<?php echo base_url(); ?>view_controller/HomeOfSchool/<?php echo $encripted_school_id; ?>" target="_blank">Preview</a>
                    </div>
                    <div class="school_admin_refresh_logout_btn">
                        <div class="refresh_or_logout">
                            <a href="" onclick="document.location.reload()">
                                <img src="<?php echo base_url(); ?>image/reload.png" alt="Refresh" title="Refresh" width="35" height="35">
                            </a>
                        </div>
                        <div class="refresh_or_logout">
                            <a href="<?php echo base_url(); ?>login_controller/schoolAdminLogout/<?php echo $encripted_school_id; ?>">
                                <img src="<?php echo base_url(); ?>image/exit.png" width="35" height="35" alt="Logout" title="Logout">
                            </a>
                        </div>
                    </div>
                </hgroup>
            </header> <!-- end of header bar -->

            <section id="secondary_bar">
                <div class="breadcrumbs_container">
                    <article class="breadcrumbs">
                        <?php
                        $obj_collect_multiple->AdminDashBoardDirection();
                        ?>
                    </article>
                </div>
            </section><!-- end of secondary bar -->

            <aside id="sidebar" class="column">

                <h3>Add Panel</h3>
                <ul class="toggle">
                    <li class="icn_view_users">
                        <a href="<?php echo base_url(); ?>view_controller/ViewAdmissionForm/<?php echo $encripted_school_id; ?>">Add Student</a>
                    </li>
                    <li class="icn_add_user"><a href="#">Add Teacher</a></li>
                    <li class="icn_add_user"><a href="#">Add Stuff</a></li>
                </ul>
                <h3>Entry</h3>
                <ul class="toggle">
                    <li class="icn_new_article"><a href="<?php echo base_url(); ?>view_controller/viewSubjectEntry">Subject</a></li>
                    <li class="icn_edit_article"><a href="<?php echo base_url(); ?>view_controller/viewEntrySubjectMark">Subject Mark</a></li>
                    <li class="icn_settings"><a href="<?php echo base_url();?>school_admin_update/viewMngSubjectAndMark">Manage Above</a></li>
                </ul>
                <h3>Create</h3>
                <ul class="toggle">
                    <li class="icn_new_article"><a href="<?php echo base_url(); ?>view_controller/ViewAddNotice">Notice</a></li>
                    <li class="icn_new_article"><a href="<?php echo base_url();?>view_controller/createExamRoutine">Routine</a></li>
                    <li class="icn_new_article"><a href="<?php echo base_url();?>view_controller/createSyllabus">Syllabus</a></li>

                </ul>
                <h3>Update</h3>
                <ul class="toggle">
                    <li class="icn_edit_article"><a href="<?php echo base_url();?>school_admin_update/ViewUpdateStdInfoLeftTab">Student Info</a></li>
                    <li class="icn_edit_article"><a href="<?php echo base_url();?>view_controller/viewMngNotice">Manage Notice</a></li>
                    <li class="icn_edit_article"><a href="<?php echo base_url();?>view_controller/MngRoutine">Manage Routine</a></li>
                    <li class="icn_edit_article"><a href="<?php echo base_url();?>view_controller/MngSyllabus">Manage Syllabus</a></li>

                    <li class="icn_edit_article"><a href="#">Teacher & Stuff Info</a></li>
                </ul>
                <h3>Media Library</h3>
                <ul class="toggle">
                    <?php
                    if ($num_rows == 0) {
                        ?>
                        <li class="icn_photo"><a href="<?php echo base_url(); ?>view_controller/UploadSchoolLogo/<?php echo $encripted_school_id; ?>">Upload School Logo</a></li>
                        <?php
                    } else {
                        ?>
                        <li class="icn_photo"><a href="<?php echo base_url(); ?>view_controller/UploadSchoolLogo/<?php echo $encripted_school_id; ?>">Update School Logo</a></li>
                        <?php
                    }
                    ?>
                    <li class="icn_photo"><a href="<?php echo base_url();?>media_controller/UploadPhotoForGallery">Gallery</a></li>
                    <li class="icn_settings"><a href="#">Manage Media Library</a></li>
                </ul>
                <h3>Admin Panel</h3>
                <ul class="toggle">
                    <li class="icn_jump_back"><a href="<?php echo base_url(); ?>login_controller/schoolAdminLogout/<?php echo $encripted_school_id; ?>">Logout</a></li>
                </ul>

                <footer>
                    <hr />
                    <p><strong>Copyright &copy; 2011 Website Admin</strong></p>
                </footer>
            </aside><!-- end of sidebar -->

            <section id="main" class="column">
                <?php
                echo $school_admin_home_content;
                ?>
            </section>


        </body>

    </html>
    <?php
} else {
    redirect("view_contoller/HomeOfSchool/$encripted_school_id");
}
?>