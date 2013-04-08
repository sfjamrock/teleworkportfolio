<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Dashboard -Telework Portfolio</title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />

	<script>
		$(function(){
			if (($.browser.msie) && ($.browser.version < '9.0')) {
			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: true,
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "Previous",
				nextText: "Next",
				controlNav: true,
			})	 } else {
			$('.flexslider').flexslider({
				animation: "fade",
				slideshow: true,
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "Previous",
				nextText: "Next",
				controlNav: true,
			});	 } 
			
			$('#carousel').elastislide({
				speed		: 450,
				easing		: '',
				imageW		: 140,
				margin		: 30,
				border		: 0,
				minItems	: 1,
				current		: 0
			});
		})
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
<div id="main">
    <?php echo $this->load->view('header'); ?>
<div class="details_holder">
        <h1>Create Company Page</h1>
        <div class="company_setup_text">Create a Company page to Start Tracking and Managing your Teleworkers<br /><br />Select your company entity<br /><br />
        	<ul>
            	<li><input name="" type="radio" value="" /><br />Business</li>
                <li><input name="" type="radio" value="" /><br />Non-profit</li>
                <li><input name="" type="radio" value="" /><br />Government</li>
                <li class="nospace"><input name="" type="radio" value="" /><br />Schools</li>
            </ul>
        </div>
        <div class="company_setup_text">
        	<div class="title">Company Information</div>
        	<div class="text1">Company Name</div>
            <div class="text2"><input name="" type="text" size="75" value="Company Name" /></div>
            <div class="text1">Address</div>
            <div class="text2"><input name="" type="text" size="45" value="Street Address" /> &nbsp; <input name="" type="text" size="23" value="Suite#" /></div>
            <div class="text1">&nbsp;</div>
            <div class="text2"><input name="" type="text" size="20" value="City " /> &nbsp; <input name="" type="text" size="25" value="State Providence" /> &nbsp; <input name="" type="text" size="15" value="Postal Code" /></div>
            <div class="text1">Contact Number</div>
            <div class="text2"><input name="" type="text" size="75" value="Phone Number" /></div>
            <div class="text1">&nbsp;</div>
            <div class="text2"><a href="#"><img src="resource/images/get-started.png" alt="" /></a></div>
        </div>
    </div>
    <?php echo $this->load->view('footer'); ?>
</body></html>


