<!--
              	<div class="other_shadetabs">
                        <ul id="othertabs">
                            <li><a href="#" rel="details1" class="selected">Location</a></li>
                            <li class="nospace"><a href="#" rel="details2">Employees</a></li>
                        </ul>
                    </div>
                    <div id="details1" class="tabcontent"> <?php echo $this->load->view('timesheet_location'); ?></div>
                    <div id="details2" class="tabcontent"> <?php echo $this->load->view('timesheet_employee'); ?> </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>
-->

<!-- ************************************************************************************************************** -->
<!-- Being timesheet layout -->
<div class="main_main" style="padding: 10px;">	
<!-- Nav tabs -->
<ul class="nav nav-pills nav-justifed">
	<li class="grey-pills round-corners ">
		<a href="#schedule-location" >Location</a>
	</li>
	<li class="grey-pills round-corners">
		<a href="#schedule-employees" >Employees</a>
	</li>
</ul>
	
<div class="tab-content">
  <div class="tab-pane active" id="timesheet-location">	
  	<?php echo $this->load->view('timesheet_location'); ?>
  </div>
  <div class="tab-pane" id="timesheet-employees">
  	<?php echo $this->load->view('timesheet_employee'); ?>
  </div>
</div>
</div>
<!-- End timesheet layout -->
<!-- ************************************************************************************************************** -->
