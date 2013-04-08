<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Profile </title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
        <script src="resource/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#submit_wall").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/dashboard/update_status'); ?>",
		data:{ 
				message_wall: $('#message_wall').attr('value'),
				loguser: <?php echo $this->session->userdata('account_id')?>,
				pageuser: <?php echo $this->uri->segment(4,$this->session->userdata('account_id'))?>
		},
		success: function(){
		
		}
	});
	return false;	
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#follow").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/profile/follow'); ?>",
		data:{ 
				loguser: <?php echo $this->session->userdata('account_id')?>,
				pageuser: <?php echo $this->uri->segment(4,$this->session->userdata('account_id'))?>
		},
		success: function(){
			alert('finish');
		}
	});
	return false;	
	});
});
</script>

		<script type="text/javascript" src="resource/js/modernizr.custom.04022.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
			<style>
				.content{
					height: auto;
					margin: 0;
				}
				.content div {
					position: relative;
				}
			</style>
	

		<![endif]-->
    </head>
    <body>

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    	   
      <div class="details_holder">
        <div class="company_beenefits">
        	<div class="title"><a href="<?php echo base_url("users/profile/lookup");?>/<?php echo $this->uri->segment(4,$this->session->userdata('account_id'));?>"><?php echo $account_details->firstname ?>'s</a> Self Evaluation and Savings</div>
            <div class="updater_mockup_text"><strong>Telework Savings</strong></div>
            <div class="savings_holder">
            	<ul>
                	<li>$<?php echo $telework_tracker->money ?></li>
                    <li><?php echo $telework_tracker->mile ?> miles</li>
                    <li class="nospace"><?php echo $telework_tracker->time ?> minutes</li>
                </ul>
            </div>
            <div class="updater_mockup_text"><strong>Job Evaluation</strong></div><br/>
            <div class="updater_mockup_text">Job Title: <?php echo $eligible_tracker->job_title ?></div><br/>
            <div class="updater_mockup_text">Job Description: <?php echo $eligible_tracker->job_title ?></div>
            <div class="job_details">
            	<ul>
                	<li><strong>Eligible Telework Task</strong></li>
                    <li><?php echo $task->task ?></li>
                    <li>list Eligible Job Task 2</li>
                    <li>list Eligible Job Task 3</li>
                </ul>
                <ul>
                	<li><strong>Non Eligible Telework Task</strong></li>
                    <li>list Non Eligible Job Task 1</li>
                    <li>list Non Eligible Job Task 2</li>
                    <li>list Non Eligible Job Task 3</li>
                </ul>
            </div>
            <div class="update_button"><a href="#"><img src="resource/images/update.png" alt="" /></a></div>
            <div class="updater_mockup_text"><strong>Similar Users</strong></div>
            <div class="similer_users">
            	<ul>
                	<li><a href="#"><img src="resource/images/img2.png" alt="" /></a> User name<br />Job title<br />Location</li>
                    <li><a href="#"><img src="resource/images/img2.png" alt="" /></a> User name<br />Job title<br />Location</li>
                    <li class="nospace"><a href="#"><img src="resource/images/img2.png" alt="" /></a> User name<br />Job title<br />Location</li>
                </ul>
            </div>
        </div>
    </div>

   <?php echo $this->load->view('footer'); ?>

    </body>
</html>