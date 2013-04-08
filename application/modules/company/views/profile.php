<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Profile -Telework Portfolio</title>
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
                    	<li class="text2">
                        	<div class="name">Employee Name</div>
                            <div class="btn_holder"><a href="#"><img src="resource/images/join-now1.png" alt="" /></a> <a href="#"><img src="resource/images/follow.png" alt="" /></a> </div>
                        </li>
                        <li class="text1">Location:</li>
                        <li class="text2">Employee Location</li>
                        <li class="text1">Subscription:</li>
                        <li class="text2">Subscription Status</li>
                    </ul>
                    <div class="textbox"><input name="" type="text" value="Status/Post" size="50" /></div>
                </div>
            </div>
            <div class="badgs">Badges</div>
            <div class="chart_box">
            	<div class="text1">Active Teleworker<br /><img src="resource/images/cir.png" alt="" /></div>
                <div class="text2">
                	<div class="color"><img src="resource/images/color1.png" alt="" /></div>
                    <div class="color_text">Teleworking</div>
                    <div class="color"><img src="resource/images/color2.png" alt="" /></div>
                    <div class="color_text">Not Teleworking</div>
                </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
        </div>
        <div class="innerpage_sidebar">
            <div class="btn_holder"><a href="#"><img src="resource/images/following.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/followers.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/add.png" alt="" /></a></div>
        </div>
    </div>
   <?php echo $this->load->view('footer'); ?>

    </body>
</html>