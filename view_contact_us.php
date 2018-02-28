           <div id="login_wrapper">
                        <div id="login" class="animate form">
                            
                            <form  action="<?php echo base_url();?>view_controller/addContactInfo" autocomplete="on" onsubmit="return validateStandard(this)" method="post"> 
                                <h1>Contact With Us </h1> 
    <font color="green">
    <?php
    if($this->session->userdata("message")){
       echo $this->session->userdata("message"); 
       $this->session->unset_userdata("message"); 
    }
    ?>
    </font>
    <font color="red">
    <?php
    if($this->session->userdata("exception")){
       echo $this->session->userdata("exception"); 
       $this->session->unset_userdata("exception"); 
    }
    ?>
    </font>                                
                                <p> 
                                    <label for="full_name" class="uname" data-icon="u" > Full Name </label>
                                    <input id="username" name="full_name" required="required" regexp="JSVAL_RX_ALPHA" err="Please enter valid user name" type="text" placeholder="your full name" />
                                </p>
                                <p> 
                                    <label for="email" class="youpasswd" data-icon="e"> Email </label>
                                    <input id="email" name="email" required="required" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" err="Please enter valid password" type="text" placeholder="eg.example@gmail.com" /> 
                                </p>
                                   <p> 
                                    <label for="website" class="youpasswd" data-icon="W"> Website </label>
                                    <input id="website" name="website" required="required" type="text" placeholder="eg.www.yourdomain.com" /> 
                                </p>
                            <p>
                                <label for="message" class="youpasswd">Message <span>*</span></label><br>
				<textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
			</p>
                                <p class="login button"> 
                                    <input type="submit" value="Send" /> 
								</p>
                             
                            </form>
                        </div>
                    </div>

