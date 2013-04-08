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
        <div class="company_beenefits">
        	<div class="title">Company Benefit</div>
            <div class="video_holder"><a href="#"><img src="resource/images/video1.png" alt="" /></a></div>
            <div class="benefit_text">
            	<div class="text_holder"><strong>Benefit one</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum, augue vel scelerisque blandit, magna sem pellentesque sem, ac porta risus diam sagittis tortor. Vivamus vel turpis massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
            	<div class="text_holder"><strong>Benefit one</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum, augue vel scelerisque blandit, magna sem pellentesque sem, ac porta risus diam sagittis tortor. Vivamus vel turpis massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
            	<div class="text_holder"><strong>Benefit one</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum, augue vel scelerisque blandit, magna sem pellentesque sem, ac porta risus diam sagittis tortor. Vivamus vel turpis massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>

            </div>
            <div class="thumb_images">
            	<ul>
                	<li><a href="#"><img src="resource/images/img3.png" alt="" /></a><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br /><a href="#">Read More</a></li>
                    <li><a href="#"><img src="resource/images/img3.png" alt="" /></a><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br /><a href="#">Read More</a></li>
                    <li><a href="#"><img src="resource/images/img3.png" alt="" /></a><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br /><a href="#">Read More</a></li>
                    <li class="nospace"><a href="#"><img src="resource/images/img3.png" alt="" /></a><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /><br /><a href="#">Read More</a></li>
                </ul>
            </div>
            <div class="btn_holder"><a href="<?php echo base_url("account/sign_up");?>"><img src="resource/images/discover-btn.png" alt="" /></a></div>
        </div>
    </div>  <?php echo $this->load->view('footer'); ?> </div>
</body>
</html>