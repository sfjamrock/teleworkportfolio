	<?php if ($this->authentication->is_signed_in()) : ?>

<div class="header">
<div class="logo"><a href="<?php echo base_url("");?>"><img src="resource/images/logo.png" alt="" height="100" width="200"/></a></div>
<!-- Log in users menu -->
		<div class="header_content">
        	<div class="search_holder">
            	<div class="textbox"><input name="" type="text" value="Search" /></div>
                <div class="btn_holder"><a href="#"><img src="resource/images/serach-btn.png" alt="" /></a></div>
            </div>
       <div class="top_btn">
                <div id="navigation">
                    <ul>
                        <li><img src="resource/images/option.png" alt="" />
							<ul>
                           <li><a href="<?php echo base_url("account_settings");?>">Account Settings</a></li>

                           <li><a href="<?php echo base_url("start");?>">Create Company Page</a></li>


<?php if($test1=$this->company_model->manager_lookup($this->session->userdata('account_id'))) :?>
<?php foreach($test1 as $row): ?>
  <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/analytics');?>"><?php echo $row->cusername; ?> Analytics</a></li>
 <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername);?>"><?php echo $row->cusername; ?> Profile</a></li>
<?php endforeach; ?>
<?php endif; ?>
                           <li><a href="<?php echo base_url("teleworkwizard");?>">Job Evaluation</a></li>

                           <li><a href="<?php echo base_url("find");?>">Locate Groups</a></li>

                           <li><a href="<?php echo base_url("history");?>">History</a></li>
            			   <li><a href="<?php echo base_url("account/sign_out");?>">Logout</a></li>

            			  <!-- <li><a href="#">Help</a></li>-->
                        </ul>                        </li>
                        <li><a href="<?php echo base_url("message");?>"><img src="resource/images/message.png" alt="" /></a>
                        </li>
                        <li><a href="#"><img src="resource/images/alerts.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
 
	   <?php else : ?>

<div class="header">
 <div class="logo"><a href="<?php echo base_url("");?>"><img src="resource/images/logo.png" alt="" height="100" width="200"/></a></div>    	<div class="header_content">
        	
            <div class="top_btn">  <div id="navigation">
<li><a href="<?php echo base_url("sign_up");?>"><img src="resource/images/btn-signup.png" alt="" /></a></li>
<li><a href="<?php echo base_url("sign_in");?>"><img src="resource/images/btn-login.png" alt="" /></a></li>
 
</div>
</div>

 		<?php endif; ?>
      </div>
</div>
