<script type="text/javascript">
	$(function() {
		$( "#accordion" ).accordion();
	});
</script>

<div class="search_again_btn">
<a href="<?php echo base_url();?>view_controller/SearchStudentBySchoolId/<?php echo $this->uri->segment(3);?>">Search again </a>
</div>
<div id="accordion">
    <h3><a href="#" class="basic">Basic Information</a></h3>
        <div id="one">
<div class="student_img">
    <img src="<?php echo base_url();?><?php echo $std_info->student_photo;?>"  width="160" height="150">
</div>
                <table class="std_info_basic">
    <tr>
        <td>Name:</td>
        <td><?php echo $std_info->student_name;?></td>
            
    </tr>
    <tr>
        <td>Father Name:</td>
        <td><?php echo $std_info->father_name;?></td>
    </tr>
    <tr>
        <td>Mother Name:</td>
        <td><?php echo $std_info->mother_name;?></td>
    </tr>
    <tr>
        <td>Religion</td>
        <td><?php echo $std_info->religion;?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php 
        if($std_info->gender==1){
            echo "Male";
        }
        else{
            echo "Female";
        }
        ?></td>
    </tr>
    <tr>
        <td>Blood Group</td>
        <td><?php 
       echo $std_info->blood_group;
        ?></td>
    </tr>
    <tr>
        <td>Date Of Birth</td>
        <td><?php 
       echo $std_info->birth_date;
        ?></td>
    </tr>
</table>
	</div>
    <h3><a href="#" class="basic">Institute Information</a></h3>
    <div class="ins_info_outer">
            <table class="ins_info">
    <tr>
        <td>Class</td>
        <td><?php 
       if($std_info->class==6){
           echo "Six";
       }
       elseif($std_info->class==7){
         echo "Seven";  
       }
       elseif($std_info->class==8){
         echo "Eight";  
       }
       elseif($std_info->class==9){
         echo "Nine";  
       }
       elseif($std_info->class==10){
         echo "Ten";  
       }
        ?></td>
    </tr>
    <?php
    if($std_info->class==9||$std_info->class==10){
    ?>
    <tr>
        <td>Group</td>
        <td><?php echo $std_info->group;?> </td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td>Student Roll</td>
        <td><?php 
       echo $std_info->std_roll;
        ?></td>
    </tr>
    <tr>
        <td>Passing Year</td>
        <td><?php 
       echo $std_info->passing_year;
        ?></td>
    </tr>
            </table>
	</div>
    <h3><a href="#" class="basic">Contact Information</a></h3>
	<div>
            <table class="contact_info">
    <tr>
        <td>Mobile Number</td>
        <td><?php 
echo $std_info->mobile_number;
        ?></td>
    </tr>
    <tr>
        <td>E-mail Address</td>
        <td><?php 
       echo $std_info->email_address;
        ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php 
       echo $std_info->division;
        ?></td>
    </tr>
    <tr>
        <td>Post Office</td>
        <td><?php 
       echo $std_info->post_office;
        ?></td>
    </tr>
    <tr>
        <td>Village</td>
        <td><?php 
       echo $std_info->village;
        ?></td>
    </tr>
            </table>            
	</div>
</div>

