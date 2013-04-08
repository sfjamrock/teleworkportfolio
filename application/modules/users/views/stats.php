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
    	<div class="innerpage_content">
        	<div class="heading">User Status</div>
            <div class="employee_status_title"><span>Enter Range Information</span> <select name=""><option>Select</option></select> </div>
            <div class="employee_status_details">
            	<ul>
                	<li># of Check-in<br /><br /><span>30</span></li>
                    <li>Money Saved<br /><br /><span>$5523</span></li>
                    <li>Time Saved<br /><br /><span>151445 minutes</span></li>
                    <li class="nospace">Distance Saved<br /><br /><span>124 miles</span></li>
                </ul>
            </div>
            <div class="employee_status_title"><strong>Distributed by Days of the week</strong></div>
            
   	  		<div class="chart_box">
            	<div class="text1"><img src="resource/images/pie-chart.png" alt="" /></div>
                <div class="text2">
                	<div class="color"><img src="resource/images/date.jpg" alt="" /></div>
                    <div class="color_text"><strong>Monday</strong></div>
                    <div class="color"><img src="resource/images/date.jpg" alt="" /></div>
                    <div class="color_text"><strong>Tuesday</strong></div>
                    <div class="color"><img src="resource/images/date.jpg" alt="" /></div>
                    <div class="color_text"><strong>Wednesday</strong></div>
                </div>
            </div>
        </div>
            <div class="innerpage_sidebar">
<?php echo $this->load->view('sidebar'); ?>
        </div>

   <?php echo $this->load->view('footer'); ?>

    </body>
</html>