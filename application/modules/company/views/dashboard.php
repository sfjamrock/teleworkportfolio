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
		<link rel="stylesheet" type="text/css" href="resource/css/style2.css" />

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
    	<div class="innerpage_content">
        	<div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">
                	<ul>
                    	<li class="text1">Employee:</li>
                    	<li class="text2">Employee Name</li>
                        <li class="text1">Employee:</li>
                        <li class="text2">Employee Location</li>
                        <li class="text1">Location:</li>
                        <li class="text2">Location Name</li>
                    </ul>
                    <div class="textbox"><input name="" type="text" value="Status" size="50" /></div>
                </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Full Name<br />Last telework day was "date" at ''location"<br /> <a href="#">Tell Us about it</a> &lt;time stamp&gt; </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Full Name<br />Last telework day was "date" at ''location"<br /> <a href="#">Tell Us about it</a> &lt;time stamp&gt; </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Full Name<br />Last telework day was "date" at ''location"<br /> <a href="#">Tell Us about it</a> &lt;time stamp&gt; </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Full Name<br />Last telework day was "date" at ''location"<br /> <a href="#">Tell Us about it</a> &lt;time stamp&gt; </div>
            </div>
        </div>
        <div class="innerpage_sidebar">
        	<div class="btn_holder"><a href="#"><img src="resource/images/telework-statistics.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/following.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/followers.png" alt="" /></a></div>
        </div>
    </div>
    <?php print_r($this->session->all_userdata()); ?>

    <?php echo $this->load->view('footer'); ?>
</body></html>


