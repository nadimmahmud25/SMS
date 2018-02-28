<div id="login_wrapper">
    <div id="login" class="animate form">
        <form  action="<?php echo base_url();?>login_controller/Admin_Login.html" autocomplete="off" method="post" onsubmit="return validateStandard(this);"> 
            <h1>Admin Login</h1> 
            <h3 class="wrong">
               <?php
               $exception=$this->session->userdata("exception");
               if(isset($exception)){
                   echo $exception;
               }   
                   $this->session->unset_userdata("exception");               
               ?>
            </h3>
            <p> 
                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                <input id="username" name="user_name" required="required" type="text" placeholder="Insert Admin Name" regexp="JSVAL_RX_ALPHA" err="Pleace Enter Valid Username">
            </p>
            <p> 
                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                <input id="password" name="user_password" required="required" type="password" placeholder="Insert Admin Password"  regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Pleace Enter Valid Password"/> 
            </p>

            <p class="login button"> 
                <input type="submit" value="Login"  name="save"/> 
            </p>

        </form>
    </div>
</div>

