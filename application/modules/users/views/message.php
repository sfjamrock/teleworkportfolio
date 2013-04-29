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
    	<div class="email_design_edits_navigation"><a href="#">Compose</a> <a href="#">Archives</a>  <select name=""><option>Select</option></select> </div>
        <div class="email_design_sidebar">
            <div class="search_holder">
                <div class="textbox"><input name="" type="text" value="Search" /></div>
                <div class="btn_holder"><a href="#"><img src="resource/images/serach-btn1.png" alt="" /></a></div>
            </div>
            <div class="email_member_msg">
            	<div class="img_holder"><img src="resource/images/img2.png" alt="" /></div>
                <div class="text_holder">Username <span class="date">2013/25/04</span><br />last message...last message...last message... </div>
            </div>
            <div class="email_member_msg">
            	<div class="img_holder"><img src="resource/images/img2.png" alt="" /></div>
                <div class="text_holder">Username <span class="date">2013/25/04</span><br />last message...last message...last message... </div>
            </div>
            <div class="email_member_msg">
            	<div class="img_holder"><img src="resource/images/img2.png" alt="" /></div>
                <div class="text_holder">Username <span class="date">2013/25/04</span><br />last message...last message...last message... </div>
            </div>
            <div class="email_member_msg">
            	<div class="img_holder"><img src="resource/images/img2.png" alt="" /></div>
                <div class="text_holder">Username <span class="date">2013/25/04</span><br />last message...last message...last message... </div>
            </div>
        </div>
        <div class="email_design_main_content">
        	<div class="user_details">Username <span class="date">Date: 00-00-0000</span><br /><br /> last message  last message  last message  last message  </div>
            <div class="user_details">Username <span class="date">Date: 00-00-0000</span><br /><br /> last message  last message  last message  last message  </div>
            <div class="user_details">Username <span class="date">Date: 00-00-0000</span><br /><br /> last message  last message  last message  last message  </div>
            <div class="user_details">Username <span class="date">Date: 00-00-0000</span><br /><br /> last message  last message  last message  last message  </div>
            <div class="leave_reply">
            	<div class="title">Leave a Replay</div>
                <div class="textbox"><textarea name="" cols="95" rows="5"></textarea></div>
                <div class="btn_holder"><a href="#"><img src="resource/images/attached-file.png" alt="" /></a> <span><a href="#"><img src="resource/images/replay-now.png" alt="" /></a></span></div>
            </div>
        </div>
    </div>   <?php echo $this->load->view('footer'); ?>

    </body>
</html>