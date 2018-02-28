<head>
<meta charset="UTF-8">
</head>
<div class="add_school_area">
    <div class="add_school_area_header">
        Add a new School
    </div>
    <div class="add_school_area_bottom">     
<form action="<?php echo base_url();?>admin_controller/addSchool.html" method="post" onsubmit="return validateStandard(this)">
    <?php
    $reg_message=$this->session->userdata('message');
    $reg_exception=$this->session->userdata('exception');
    if($this->session->userdata('exception')){
    ?>
    <div class="registration_exception">
        <div class="error_img">
        <img src="<?php echo base_url();?>image/error.gif" width="30" height="30" class="error_img"> 
        </div>
        <div class="error_img_txt">
        <?php          
echo "<h3>$reg_exception</h3>";
        $this->session->unset_userdata("exception");
        ?>
        </div>
    </div>
    <?php
    }
    elseif($this->session->userdata('message')){
    ?>
    <div class="registration_message">
        <div class="error_img">
        <img src="<?php echo base_url();?>image/check.png" width="30" height="30" class="error_img"> 
        </div>
        <div class="right_img_txt">        
        <?php
        echo "<h3>$reg_message</h3>";
        $this->session->unset_userdata("message");
        ?>  
        </div>
    </div>
    <?php
    }
    ?>
    <div class="add_school_area_bottom_single_line">
        <div id="school_exist_view"></div>
        <div class="add_school_area_bottom_single_line_left">
            Name of School
        </div>
        <div class="add_school_area_bottom_single_line_right">
            <input type="text" id="school_name" onkeyup="SchoolExistCheck(this.value,'school_exist_view')" onblur="SchoolExistCheck(this.value,'school_exist_view')" name="school_name">  
        </div>
    </div>
    <div class="add_school_area_bottom_single_line">     
        <div class="add_school_area_bottom_single_line_left">
            Established
        </div>
        <div class="add_school_area_bottom_single_line_right">
            
            
            <select name=month onchange="select_day()" id="month" required="1" exclude=" " err="Please enter valid Month">
            <option value=" ">---Month--</option>
            <script type="text/javascript">
                PrintMonths();
        </script>
      </select>
        <select name="year" id="year" onchange="select_day()" required="1" exclude=" " err="Please enter valid Year">
            <option value=" ">---Year--</option>            
            <?php
            for($j=date("Y");$j>=1850;$j--){
                echo "<option value='$j'>$j</option>";
            }
            ?>
        </select>             
        <select name=day id="load_day" required="1" exclude=" " err="Please enter valid Day">
            <option value=" ">---Day--</option>            
            <?php
            for($i=1;$i<=31;$i++){
                if($i<10){
                 echo "<option value='$i'>0$i</option>";   
                }
                else{
                echo "<option value='$i'>$i</option>";
                }
            }
            ?>
          </select> 
        </div>
    </div>
    <div class="add_school_area_bottom_single_line">
        <div class="add_school_area_bottom_single_line_left">
            Location of School
        </div>
        <div class="add_school_area_bottom_single_line_right">
            <select name="district" id="district" onchange="select_thana(this.value)"  required="1" exclude=" " err="Please enter valid District">
                <option value=" ">Select District</option>
                <script type="text/javascript">
            PrintDistrict();    
            </script>
            </select>
            <select name="thana" id="thana" required="1" exclude=" " err="Please enter valid Thana">
                <option value=" ">Select Thana</option>
            </select>
        </div>
    </div>
    <div class="add_school_area_bottom_single_line">
        <div id="email_exist_view"></div>           
        <div class="add_school_area_bottom_single_line_left">
            Email
        </div>
        <div class="add_school_area_bottom_single_line_right">
            <input type="email" id="email" onkeyup="AdminEmailExistCheck('email_exist_view')" name="school_admin_email" placeholder="admin email" required="1" regexp="JSVAL_RX_EMAIL" err="Please enter valid email address">  
        </div>
    </div>
    <div class="add_school_area_bottom_single_line">
        <div id="user_name_exist_view"></div>
        <div class="add_school_area_bottom_single_line_left">
            User Name
        </div>
        <div class="add_school_area_bottom_single_line_right">
            <input type="text" id="user_name" name="school_admin_user_name" onkeyup="AdminUserNameExistCheck('user_name_exist_view')" onblur="AdminUserNameExistCheck('user_name_exist_view')" placeholder="user name of admin" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC" err="Please enter valid user name">  
        </div>
    </div>
    <div class="add_school_area_bottom_single_line">
        <div id="checkPasswordStrength"><div id="strendth"></div></div>
        <div class="add_school_area_bottom_single_line_left">
            Password
        </div>
        <div class="add_school_area_bottom_single_line_right">
            <input type="password" onkeyup="chkPasswordStrength(this.value,document.getElementById('strendth'),document.getElementById('passError'))" maxlength="32" name="school_admin_password" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Please enter valid password" required="1">  
        </div>
    </div>
    <div class="reg_button">
        <input type="submit" value="Register" name="register">
        <input type="reset">
    </div>
</form>
</div>
</div>