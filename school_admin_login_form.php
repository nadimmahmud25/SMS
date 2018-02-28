<div id="form_wrapper" class="form_wrapper">
    <form class="login active" action="<?php echo base_url();?>school_admin_controller/schoolAdminLoginCheck/<?php echo $encripted_school_id; ?>" method="post">
						<h3>School Admin Login</h3>
                                                    
                                                <span class="wrong">
                                                    <?php
                                                    if($this->session->userdata("exception")){
                                                        echo $this->session->userdata("exception");
                                                        echo $this->session->unset_userdata("exception");
                                                    }
                                                    ?>
                                                </span>
						<div>
							<label>Username</label>
							<input type="text" name="school_admin_user_name" />
						</div>
						<div>
							<label>Password</label>
							<input type="password"  name="school_admin_user_pass" />
						</div>
						<div class="bottom">
							<div class="remember"></div>
							<input type="submit" value="Login"></input>
						
							<div class="clear"></div>
						</div>
					</form>

				</div>