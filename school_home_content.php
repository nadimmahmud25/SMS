<div class="home_whole_area">
    <div class="panel_box">
        <div class="panel_box_header">
            About Searching
        </div>
        <div class="for_view">
            <div class="list_of_link">
      <ul>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/SearchStudentBySchoolId/<?php echo $encripted_school_id ?>'><span>Search Student</span></a> </li>
         <li class='has-sub '><a href='<?php echo base_url();?>search_controller/SearchStudentResult/<?php echo $encripted_school_id ?>'><span>Search Result</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewMeritClassWise/<?php echo $encripted_school_id ?>'><span>Merit List</span></a></li>
      </ul>
        </div>
        </div>
        <div class="panel_box_bottom">
            <img src="<?php echo base_url();?>images/search-256.png" width="185" height="150">   
        </div>
        <div class="panel_box_footer">
        </div>
    </div>
    
    <div class="panel_box">
        <div class="panel_box_header">
            View Chart
        </div>
        <div class="for_view">
            <div class="list_of_link">
      <ul>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewStdResultByBarChart/<?php echo $encripted_school_id ?>'><span>View Result by Chart</span></a></li>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/ViewStudentBarChart/<?php echo $encripted_school_id ?>'><span>View Student by Chart</span></a></li>
      </ul>
        </div>
        </div>
        <div class="panel_box_bottom">
            <img src="<?php echo base_url();?>image/report/VerticalBarChart.png" width="185" height="150">   
        </div>
        <div class="panel_box_footer">
        </div>
    </div>
    
    <div class="panel_box">
        <div class="panel_box_header">
            Academic
        </div>
        <div class="for_view">
            <div class="list_of_link">
      <ul>
         <li class='has-sub '><a href='<?php echo base_url();?>view_controller/viewAddedNotice/<?php echo $encripted_school_id;?>'><span>Notice</span></a></li>
   <li><a href='<?php echo base_url();?>view_controller/viewSyllabus/<?php echo $encripted_school_id ?>'><span>Syllabus</span></a></li>
   <li><a href='<?php echo base_url();?>view_controller/viewRoutine/<?php echo $encripted_school_id ?>'><span>Exam Routine</span></a></li>         
        <li><a href='<?php echo base_url();?>view_controller/viewPhotoGallery'><span>Gallery</span></a></li>         
         <li class='has-sub '><a href='#'><span>Teachers</span></a> </li>
         <li class='has-sub '><a href='#'><span>Staff</span></a></li>         
      </ul>
        </div>
        </div>
        <div class="panel_box_bottom">
            <img src="<?php echo base_url();?>image/education.jpg" width="185" height="150">   
        </div>
        <div class="panel_box_footer">
        </div>
    </div>
</div>