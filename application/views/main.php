<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->lang->line('website_title'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="Telework Portfolio is a professional network that makes it easy for employees and employers to measure their telework ROI." />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home, remote worker" />
<!-- SmartAddon.com Verification --> 
<meta name="smartaddon-verification" content="3b219f3b7e193f60d4373862942e52c1" />
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
    <div class="benefit_buttons"><a href="<?php echo base_url("employee");?>"><img src="resource/images/benefit1.png" alt="" /></a> <a href="<?php echo base_url("business");?>"><img src="resource/images/benefit2.png" alt="" /></a> </div>
<div style="clear:both"></div><br/>
<h1 style="font-size:xx-large;text-align:center; color:#095189">Welcome to Telework Portfolio <br/> <strong>The telework analytics system for companies and 
employees to evaluate the effectiveness of their telework program.</strong></h1><div style="clear:both"></div><br/>

    <div class="main_container">
      <div class="main_content">
       <!--<div class="title">Where Teleworkers meet</div>-->
        <div class="video_holder"><iframe width="600" height="370" src="http://www.youtube.com/embed/wDjA7QNFagI" frameborder="0" allowfullscreen></iframe></div>
      </div>
      <div class="sidebar">
        <div class="title">Get Started - Its Free</div>
        <div class="form_holder">

		<form name="sign_up" action="sign_up" enctype="multipart/form-data" method="post">
          <div class="text2">First Name:</div>
          <div class="text3">
                <?php echo form_input(array(
                        'name' => 'sign_up_firstname',
                        'id' => 'sign_up_firstname',
                        'size' => '25',
                        'value' => set_value('sign_up_firstname'),
                        'maxlength' => '25'
                    )); ?>
                <?php echo form_error('sign_up_firstname'); ?>
                <?php if (isset($sign_up_firstname_error)) : ?>
                <span class="field_error"><?php echo $sign_up_firstname_error; ?></span>
                <?php endif; ?>
          </div>
          <div class="text2">Last Name:</div>
          <div class="text3">
 					<?php echo form_input(array(
                        'name' => 'sign_up_lastname',
                        'id' => 'sign_up_lastname',
                        'size' => '25',
                        'value' => set_value('sign_up_lastname'),
                        'maxlength' => '25'
                    )); ?>
                <?php echo form_error('sign_up_lastname'); ?>
                <?php if (isset($sign_up_lastname_error)) : ?>
                <span class="field_error"><?php echo $sign_up_lastname_error; ?></span>
                <?php endif; ?>
          </div>
          <div class="text2">Email:</div>
          <div class="text3">
                <?php echo form_input(array(
                        'name' => 'sign_up_email',
                        'id' => 'sign_up_email',
                        'size' => '25',
                        'value' => set_value('sign_up_email'),
                        'maxlength' => '160'
                    )); ?>
                <?php echo form_error('sign_up_email'); ?>
                <?php if (isset($sign_up_email_error)) : ?>
                <span class="field_error"><?php echo $sign_up_email_error; ?></span>
                <?php endif; ?>
          </div>
          <div class="text2">Password:</div>
          <div class="text3">
                <?php echo form_password(array(
                        'name' => 'sign_up_password',
                        'id' => 'sign_up_password',
                        'type' => 'password',
                        'size' => '25',
                        'value' => set_value('sign_up_password')
                    )); ?>
                <?php echo form_error('sign_up_password'); ?>

          </div>
          <div class="text1">By Joining Telework Portfolio, you agree to our's <a href="<?php echo base_url("terms");?>" style="text-decoration: none">Terms</a> and <a href="<?php echo base_url("policy");?>" style="text-decoration: none">Privacy Policy</a>.</div>
          <div class="btn_holder"><INPUT TYPE="image" SRC="resource/images/join-now.png" ALT="Submit Form"></div><div style="clear:both"></div><br/>
          </form>
			OR Login: <a href="<?php echo base_url("connect_facebook");?>"><img src="resource/images/circle_facebook.png" alt=""  height="40" width="40"style="margin:0px 5px 0 5px;vertical-align: middle"/></a> <a href="<?php echo base_url("connect_google");?>"><img src="resource/images/google_circle.png" alt=""  height="40" width="40"style="margin:0px 5px 0 5px;vertical-align: middle"/></a>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="title">Featured Teleworkers</div>
      <div class="testimonials_text_holder">
        <div class="text_holder"><img src="http://2.bp.blogspot.com/-rHYe2xmQVyQ/UZVK1UJW-uI/AAAAAAAAAc0/4_3fmW6-jHY/s1600/scarf.jpg" height="55px" width="60px" style="float:left; margin:0px 10px 0px 0px" > 
			When it comes to teleworking, I love the ability to match my human 
			daily rhythms to my work productivity. I am naturally a morning 
			person and I think it's such a waste of time to start my day and 
			face a hideous commute...<br />
          <br />
          <br />
          <a href="http://teleworkportfolio.blogspot.com/2013/06/why-i-love-teleworking-with-rashid.html" target="_blank">
				<strong> Read more about Rashid Darden</strong></a></div>
        <div class="text_holder"><img src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/3/000/1c2/0a4/0ea6c3c.jpg" height="55px" width="60px" style="float:left; margin:0px 10px 0px 0px" > 
		Less distractions / Able to produce more work / Not having to face traffic....<br />
          <br />
          <br />
          <br />
		  <br />
          <a href="http://teleworkportfolio.blogspot.com/2013/06/why-i-love-teleworking-with-graham.html" target="_blank">
		<strong>Read more about Graham Farinha</strong></a></div>
      </div>
    </div>
  </div>
  <?php echo $this->load->view('footer'); ?> </div>
</body>
</html>