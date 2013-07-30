<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title><?php echo $company->cusername?>|Telework Portfolio</title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />

	</head>
    <body>

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    	   
    <div class="details_holder">
    	<div class="innerpage_content">
 			<div class="employee_dashboard_box">
            	<div class="main_img"><img src="resource/images/img2.png" alt="" /></div>
                <div class="text_holder">
                	<ul>
                    	<li class="title"><?php echo $company->cusername?></li>
                    	<li class="text"><?php echo $company->city?>, <?php echo $company->state?></li>
                    </ul>
                    <div class="textbox"><form id="submit_wall"><input type="text"  id="message_wall" size="35" placeholder="Post"/>
                    <button type="submit">Post</button></form></div>
                </div>
                <div class="member_image">
					<form action="company/profile/join" method="post"><input type="submit" id="join" name="company"value="<?php echo $this->uri->segment(1)?>"
    style="background-image: url(resource/images/join-now1.png); border: solid 0px #000000; width: 70px; height: 32px; font-size: 0.1px;" />
</form></div>
            </div>
<?php if ($this->session->flashdata('join')  != '');
echo $this->session->flashdata('join');
?>

            <!--<div class="badgs">Badges</div>-->
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
        	<div class="btn_holder"><a href="#"><img src="resource/images/telework-statistics.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/following.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/followers.png" alt="" /></a></div>
        </div>
    </div>
   <?php echo $this->load->view('footer'); ?>

    </body>
</html>