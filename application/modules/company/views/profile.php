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
        <link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="resource/js/tabcontent.js"></script>
	</head>
    <body>

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    	<div class="discussion_group_details">
        	<div class="img_holder"><a href="<?php echo base_url("");?>/<?php echo $company->cusername?>">
					<?php if (strpos($company->picture, "http://") === 0) :?>
					<img src="<?php echo $company->picture; ?>" width="115" height="115"alt="" />
					<?php elseif (isset($company->picture)) : ?>
					<img src="resource/user/profile/<?php echo $company->picture; ?>?t=<?php echo md5(time()); ?>"  width="115" height="115"alt="" /> 
					<?php else : ?>
					<img src="resource/resource/images/img5.png" width="115" height="115"alt="" />
					<?php endif; ?></a>
			</div>
            <div class="text_holder"><strong><?php echo $company->cusername?></strong><br /><br /><?php echo $company->city?>, <?php echo $company->state?></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/btn-member.png" alt="" /></a> &nbsp; <a href="#"><img src="resource/images/btn-message-admin.png" alt="" /></a></div>
        </div>
    	<div class="main_tabholder">
            <div class="shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">Discussion</a></li>
                    <li><a href="#" rel="country2">Leaders</a></li>
                    <li><a href="#" rel="country3">Savings</a></li>
                    <li><a href="#" rel="country4">Analytics</a></li>
                    <li><a href="#" rel="country5">Teleworkers</a></li>
                </ul>
            </div>
            <div class="tab_content">
                <div id="country1" class="tabcontent">
                	<div class="discussion_mockup_main">
                    	<div class="discussion_post">
                            <div class="img_holder"><img src="resource/images/img5.png" alt="" /></div>
                            <div class="text_holder"><textarea name="" cols="" rows="5">Discussion</textarea><br /><input name="" type="submit" class="btn_style" /></div>
                        </div>
                        <div class="discussion_post_details">
                        	<div class="img_holder"><img src="resource/images/img5.png" alt="" /></div>
                            <div class="post_content">
                            	<div class="text_holder"><strong>User Name</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lorem sapien, convallis fringilla tellus in, mattis blandit turpis<br /><br /><a href="#">share <img src="resource/images/post-ico1.png" alt="" /></a> <a href="#">comment <img src="resource/images/post-ico2.png" alt="" /></a> <a href="#">time <img src="resource/images/post-ico3.png" alt="" /></a></div>
                                <div class="posted_content"><img src="resource/images/img5.png" alt="" /> <strong>User Name</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lorem sapien, convallis fringilla tellus in, mattis blandit turpis<br /><br /><strong>Time</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="discussion_mockup_add"><a href="#"><img src="resource/images/add2.png" alt="" /></a></div>
                </div>
                <div id="country2" class="tabcontent"><strong><?php echo $this->load->view('leaders'); ?></strong></div>
                <div id="country3" class="tabcontent"><strong><?php echo $this->load->view('savings'); ?></strong></div>
                <div id="country4" class="tabcontent"><strong><?php echo $this->load->view('analytics'); ?></strong></div>
                <div id="country5" class="tabcontent"><strong> <?php echo $this->load->view('teleworker'); ?></strong></div>
            </div>  
        </div>
    </div>
<!--	   
    <div class="details_holder">
    	<div class="innerpage_content">
 			<div class="employee_dashboard_box">
            	<div class="main_img"><a href="<?php echo base_url("");?>/<?php echo $company->cusername?>">
					<?php if (strpos($company->picture, "http://") === 0) :?>
					<img src="<?php echo $company->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($company->picture)) : ?>
					<img src="resource/user/profile/<?php echo $company->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/resource/images/img2.png"  width="75" height="75"alt="" />
					<?php endif; ?></div>

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
    style="background-image: url(resource/resource/images/join-now1.png); border: solid 0px #000000; width: 70px; height: 32px; font-size: 0.1px;" />
</form></div>
            </div>
<?php if ($this->session->flashdata('join')  != '');
echo $this->session->flashdata('join');
?>

            <!--<div class="badgs">Badges</div>
            <div class="chart_box">
            	<div class="text1">Active Teleworker<br /><img src="resource/resource/images/cir.png" alt="" /></div>
                <div class="text2">
                	<div class="color"><img src="resource/resource/images/color1.png" alt="" /></div>
                    <div class="color_text">Teleworking</div>
                    <div class="color"><img src="resource/resource/images/color2.png" alt="" /></div>
                    <div class="color_text">Not Teleworking</div>
                </div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
            <div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">Following<br /> Last telework day was "date"<br />Most frequent teleworker<br /><a href="#">Save</a>   -   <a href="#">Like</a></div>
            </div>
        </div>
        <div class="innerpage_sidebar">
        	<div class="btn_holder"><a href="#"><img src="resource/resource/images/telework-statistics.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/resource/images/following.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/resource/images/followers.png" alt="" /></a></div>
        </div>
    </div>-->
   <?php echo $this->load->view('footer'); ?>
<script type="text/javascript">
	var countries=new ddtabcontent("countrytabs")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
</script>
    </body>
</html>