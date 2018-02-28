<ul class="site_map">
        <ul>
            <li><a href="<?php echo base_url();?>view_controller/HomeOfSchool/<?php echo $this->uri->segment(3);?>">School Home</a></li>
            <li><a href="#">Search</a>
                <ul>
                    <li><a href="<?php echo base_url();?>view_controller/SearchStudentBySchoolId/<?php echo $this->uri->segment(3);?>">Search Student</a></li>
                    <li><a href="<?php echo base_url();?>search_controller/SearchStudentResult/<?php echo $this->uri->segment(3);?>">Search Result</a></li>
                    <li><a href="<?php echo base_url();?>view_controller/ViewMeritClassWise/<?php echo $this->uri->segment(3);?>">Merit List</a></li>
                </ul>
            </li>
            <li><a href="#">View</a>
                <ul>
                    <li><a href="#">Teachers</a></li>
                    <li><a href="<?php echo base_url();?>view_controller/index">Stuff</a></li>
                    <li><a href="<?php echo base_url();?>view_controller/viewAddedNotice/<?php echo $this->uri->segment(3);?>">Notice</a></li>
                    <li><a href="<?php echo base_url();?>view_controller/ViewStdResultByBarChart/<?php echo $this->uri->segment(3);?>">View Result by Char</a></li>
                    <li><a href="<?php echo base_url();?>view_controller/ViewStudentBarChart/<?php echo $this->uri->segment(3);?>">View Student by Char</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>view_controller/viewSyllabus/<?php echo $this->uri->segment(3);?>">Syllabus</a></li>            
            <li><a href="<?php echo base_url();?>view_controller/viewRoutine/<?php echo $this->uri->segment(3);?>">Exam Routine</a></li>            
            <li><a href="<?php echo base_url();?>view_controller/viewPhotoGallery/<?php echo $this->uri->segment(3);?>">Gallery</a></li>            
            <li><a href="#">About School</a></li>            
            <li><a href="<?php echo base_url();?>view_controller/view_school_admin_login_form/<?php echo $this->uri->segment(3);?>">School Admin Login</a></li>            
        </ul>
</ul>