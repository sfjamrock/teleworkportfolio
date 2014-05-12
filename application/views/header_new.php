<?php if ($this->authentication->is_signed_in()) : ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url("");?>">TELEWORK PORTFOLIO</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
               <?php if ($product->timesheet == 1):?><a href="<?php echo base_url("timesheet");?>" class="dropdown-toggle" data-toggle="dropdown">TIMESHEET<b class="caret"></b></a><?php endif;?>
				<ul class="dropdown-menu">
		            <?php if ($product->schedule == 1) :?><li><a href="<?php echo base_url("timesheet");?>">TIMESHEET</a></li><?php endif; ?>
		            <?php if ($product->schedule == 1) :?><li><a href="<?php echo base_url("schedule");?>">SCHEDULE</a></li><?php endif; ?>
		            <?php if ($product->task == 1) :?><li><a href="<?php echo base_url("task");?>">TASK</a></li><?php endif; ?>
                </ul>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATOR <b class="caret"></b></a>
                <ul class="dropdown-menu">
					<?php if($test1=$this->company_model->manager_lookup($this->session->userdata('account_id'))) :?>
					<?php foreach($test1 as $row): ?>		
					
					<?php if ($product->stats == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername);?>"> DASHBOARD</a></li><?php endif; ?>
					<?php if ($product->timesheet == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/timesheets');?>">EMPLOYEE HOURS</a></li><?php endif; ?>
					<?php if ($product->schedule == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/schedule');?>">SCHEDULE</a></li><?php endif; ?>
					<?php if ($product->equipment_management == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/equipment');?>">EQUIPMENT</a></li><?php endif; ?>
					<?php if ($product->hotelling == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/hotelling');?>">HOTELLING</a></li><?php endif; ?>
					<?php if ($product->task == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/task');?>">TASK</a></li><?php endif; ?>
					            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/employees');?>">EMPLOYEE CENTER</a></li>
					            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/locations');?>">LOCATIONS</a></li>
					            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/alerts');?>">ALERTS</a></li>	
				
					<?php endforeach; ?>
					<?php endif; ?>
                </ul>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT SETTINGS <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url("account_settings");?>">SETTING</a></li>
                  <li><a href="<?php echo base_url("account_password");?>">PASSWORD</a></li>
                  <li><a href="<?php echo base_url("account_profile");?>">PROFILE</a></li>
        		  <li><a href="<?php echo base_url("account/sign_out");?>">LOGOUT</a></li>
                </ul>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li>
      <div class="row" >
        <div class="col-md-1">	</div>
        
		<?php if (isset($account_details->account_id) ):?>
		<div class="col-md-4">
						<?php if (strpos($account_details->picture, "http://") === 0) :?>
						<img src="<?php echo $account_details->picture; ?>"  width="75" height="75"alt="" />
						<?php elseif (isset($account_details->picture)) : ?>
						<img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
						<?php else : ?>
						<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
						<?php endif; ?>  
		</div>
        <div class="col-md-4"><h3><?php echo $account_details->firstname ?> <?php echo $account_details->lastname ?></h3></div>	
		<?php elseif (isset($company->cid) ) : ?>
		<div class="col-md-4">
					
					<?php if (strpos($company->picture, "http://") === 0) :?>
					<img src="<?php echo $company->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($company->picture)) : ?>
					<img src="resource/user/profile/<?php echo $company->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/resource/images/img5.png" width="75" height="75"alt="" />
					<?php endif; ?>
		</div>


        <div class="col-md-4"><h3><?php echo $company->cusername?></h3></div>	
		<?php endif; ?>
		</div>
			</li>            
          </ul>

          <ul class="nav nav-sidebar">
            <?php if ($product->timesheet == 1) :?><li><a href="<?php echo base_url("timesheet");?>">TIMESHEET</a></li><?php endif; ?>
            <?php if ($product->schedule == 1) :?><li><a href="<?php echo base_url("schedule");?>">SCHEDULE</a></li><?php endif; ?>
            <?php if ($product->task == 1) :?><li><a href="<?php echo base_url("task");?>">TASK</a></li><?php endif; ?>
          </ul>
          <ul class="nav nav-sidebar">
			<?php if($test1=$this->company_model->manager_lookup($this->session->userdata('account_id'))) :?>
			<?php foreach($test1 as $row): ?>

				<li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername);?>"> DASHBOARD</a></li>
				<?php if ($product->timesheet == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/timesheets');?>">EMPLOYEE HOURS</a></li><?php endif; ?>
				<?php if ($product->schedule == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/schedule');?>">SCHEDULE</a></li><?php endif; ?>
				<?php if ($product->equipment_management == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/equipment');?>">EQUIPMENT</a></li><?php endif; ?>
				<?php if ($product->hotelling == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/hotelling');?>">HOTELLING</a></li><?php endif; ?>
				<?php if ($product->task == 1) :?><li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/task');?>">TASK</a></li><?php endif; ?>
				            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/employees');?>">EMPLOYEE CENTER</a></li>
				            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/location');?>">LOCATIONS</a></li>
				            <li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/alerts');?>">ALERTS</a></li>

			<?php endforeach; ?>
			<?php endif; ?>
          </ul>
        </div> 
	   <?php else : ?>
<div class="header">
 <div class="logo"><a href="<?php echo base_url("");?>"><img src="resource/images/logo.png" alt="" height="100" width="200"/></a></div>    	<div class="header_content">
        	
            <div class="top_btn">  <div id="navigation">
<!--<li><a href="<?php echo base_url("sign_up");?>"><img src="resource/images/btn-signup.png" alt="" /></a></li>-->
<li><a href="<?php echo base_url("sign_in");?>"><img src="resource/images/btn-login.png" alt="" /></a></li> 
</div>
</div>
 		<?php endif; ?>
      </div>
</div>
