<div class="header">
<div class="logo"><a href="<?php echo base_url("");?>"><img src="resource/images/logo.png" alt="" /></a></div>
	<?php if ($this->authentication->is_signed_in()) : ?>
<!-- Log in users menu -->
		<div class="header_content">
        	<div class="search_holder">
            	<div class="textbox"><input name="" type="text" value="Search" /></div>
                <div class="btn_holder"><a href="#"><img src="resource/images/serach-btn.png" alt="" /></a></div>
            </div>
            <div class="top_btn">
            	<ul >
					<li><a href="#"><img src="resource/images/option.png" alt="" /></a> </li>

					<li><a href="#"><img src="resource/images/message.png" alt="" /></a> </li>
			    	<li><a href="#"><img src="resource/images/alerts.png" alt="" /></a>
                       <!-- <ul>
                           <li><a href="<?php echo base_url("account/account_settings");?>">Account Settings</a></li>
                           <li><a href="<?php echo base_url("users/badges");?>">Badges</a></li>
                           <li><a href="<?php echo base_url("company/start");?>">Create Company Page</a></li>

                           <li><a href="<?php echo base_url("users/profile/lookup");?>/<?php echo $this->uri->segment(4,$this->session->userdata('account_id'));?>">Profile</a></li>

                           <li><a href="<?php echo base_url("users/teleworker");?>">Teleworker</a></li>
                           <li><a href="<?php echo base_url("users/stats");?>">Stats</a></li>

                           <li><a href="<?php echo base_url("users/history");?>">History</a></li>
            			   <li><a href="<?php echo base_url("sign_out");?>">Logout</a></li>

            			   <li><a href="#">Help</a></li>
                        </ul> -->
                    </li>
                </ul>
			</div>  
	   <?php else : ?>
<!-- Homepage login  -->
    	<div class="login_box">
			<form name="sign_up" action="account/sign_in" enctype="multipart/form-data" method="post">
			<div class="textbox"> 
<!-- User Email login with error handling -->
			   <?php echo form_input(array(
                        'name' => 'sign_in_username_email',
                        'id' => 'sign_in_username_email',
                        'value' => set_value('sign_in_username_email'),
                        'maxlength' => '24',
						'placeholder'=>'Email'
                    )); ?>
                <?php echo form_error('sign_in_username_email'); ?>
                <?php if (isset($sign_in_username_email_error)) : ?>
                <span class="field_error"><?php echo $sign_in_username_email_error; ?></span>
                <?php endif; ?>
			</div>
<!-- User password login with error handling -->
	        	<div class="textbox"> <?php echo form_password(array(
                        'name' => 'sign_in_password',
                        'id' => 'sign_in_password',
                        'value' => set_value('sign_in_password'),
						'placeholder'=>'Password',
						'class'=>'password'
                    )); ?>
                <?php echo form_error('sign_in_password'); ?>                
			 	</div>
	            <div class="btn_holder"><INPUT TYPE="image" SRC="resource/images/login.png" ALT="Submit Form"></div>
	            <div class="checkbox"><input name="sign_in_remember" id="sign_in_remember" type="checkbox" value="checked"  checked=" $this->input->post('sign_in_remember')"/></div>
	            <div class="checkbox_text">Remember me  |  <a href="<?php echo base_url("account/forgot_password");?>">Forget Password?</a></div>
			</form>
 		<?php endif; ?>
      </div>
</div>
