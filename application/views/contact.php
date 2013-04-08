<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->lang->line('website_title'); ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Telework Portfolio is a professional network that makes it easy for employees and employers to measure their telework ROI." />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home, remote worker" />
<meta name="author" content="Telework Portfolio" />
<link rel="stylesheet" href="resource/css/style.css" media="screen" />
<link rel="icon" href="resource/images/favicon.ico" />
<link rel="shortcut icon" href="resource/images/favicon.ico" />

<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/resource/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
	<![endif]-->
<!--[if lt IE 9]>
		<script src="resource/js/html5.js"></script>
		<script src="resource/js/jquery.hoverIntent.minified.js"></script>
		<link rel="stylesheet" href="resource/css/ie.css"> 
	<![endif]-->
</head>
<body>
<div id="main">
 <?php echo $this->load->view('header'); ?>
<div class="details_holder">
        <div class="main_container">
        	<div class="main_content">
            	<div class="title">Contact Us</div>
                <div class="video_holder"><strong>We want to hear from you.</strong><br /><br />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div class="contact_info">
                	<h2>Contact Info Area:</h2>
                    <ul>
                    	<li>Full Name:</li>
                        <li class="big">Name Goes Here.....</li>
                        <li>Address:</li>
                        <li class="big">Address Goes Here.....</li>
                        <li>Phone:</li>
                        <li class="big">Phone Goes Here.....</li>
                        <li>Fax:</li>
                        <li class="big">Fax Goes Here.....</li>
                        <li>Email:</li>
                        <li class="big">Email Goes Here.....</li>
                    </ul>
                </div>
                <div class="follow_us">
                	Follow Us:<br /><a href="http://www.facebook.com/TeleworkPortfolio" target="_blank"><img src="resource/images/facebook.png" alt="" /></a> <a href="#"><img src="resource/images/twitter.png" alt="" /></a> <a href="#"><img src="resource/images/google.png" alt="" /></a> <a href="#"><img src="resource/images/openid.png" alt="" /></a> <a href="#"><img src="resource/images/yahoo.png" alt="" /></a> 
                </div>
            </div>
            <div class="sidebar">
            	<div class="title">Leave us a Message</div>
                <div class="form_holder">
                	<div class="text2">First Name:</div>
                	<div class="text3"><input name="" type="text" size="28" /></div>
                    <div class="text2">Last Name:</div>
                	<div class="text3"><input name="" type="text" size="28" /></div>
                    <div class="text2">Email:</div>
                	<div class="text3"><input name="" type="text" size="28" /></div>
                    <div class="text2">Comments:</div>
                	<div class="text4">
                	  <textarea name="" cols="25" rows="5"></textarea>
               	  </div>
                    <div class="btn_holder"><a href="#"><img src="resource/images/send.png" alt="" /></a></div>
                </div>
            </div>
        </div>
    </div>  <?php echo $this->load->view('footer'); ?> </div>
</body>
</html>