﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <script src="resource/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="resource/js/modernizr.custom.04022.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#submit_wall").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/dashboard/update_status'); ?>",
		data:{ 
				message_wall: $('#message_wall').attr('value'),
				loguser: <?php echo $this->session->userdata('account_id')?>,
				pageuser: "<?php echo $this->uri->segment(2,$account->username)?>"
		},
		success: function(){
			
		}
	});
	return false;	
	});
});
</script>
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
			<div class="employee_dashboard_box">
            	<div class="main_img"><a href="<?php echo base_url("profile");?>/<?php echo $account->username?>">
					<?php if (strpos($account_details->picture, "http://") === 0) :?>
					<img src="<?php echo $account_details->picture; ?>" width="90" height="110"alt="" />
					<?php elseif (isset($account_details->picture)) : ?>
					<img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
					</a></div>
                <div class="text_holder">
                	<ul>
                    	<li class="title"><?php echo $account_details->firstname ?> <?php echo $account_details->lastname ?></li>
                    	<li class="text"><?php echo $location->city ?>, <?php echo $location->region_code ?></li>
                       <!-- <li class="text">Employer:</li>-->
                    </ul>
                    <div class="textbox"><form id="submit_wall"><input type="text"  id="message_wall" size="35" placeholder="Status"/>
                    <button type="submit">Post</button></form></div>
                </div>
                <div class="member_image">
<?php if( !$this->tp_model->check_by_id($account->id)) :?>
<a href="<?php echo base_url("teleworkwizard");?>"><img src="resource/images/Green-button.png" alt="Getting started" width="120"/>
<?php else : ?>
<a href="<?php echo base_url("teleworkwizard/savings");?>"><img src="resource/images/Check-In.png" alt="Telework Savings check in" width="120"/>
<?php endif; ?>
</a></div>
            </div>
         <!--   Start of Update Wall Script -->
<?php foreach($wall_dashboard as $row): ?>
            <div class="employee_dashboard_box new_border">
            	<div class="main_img"><a href="<?php echo base_url("profile");?>/<?php echo $row->username;?>">

					<?php if (strpos($row->picture, "http://") === 0) :?>
					<img src="<?php echo $row->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($row->picture)) : ?>
					<img src="resource/user/profile/<?php echo $row->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>

				</a></div>
                <div class="text_holder"><strong><?php echo $row->firstname; ?> <?php echo $row->lastname; ?><br /><?php echo $row->message; ?><br />Comment | 
					<?php  echo $row->posted_on; ?> days</strong></div>
            </div>
  
 
                <?php endforeach; ?>
                         <!--   End of Update Wall Script -->
        </div>
<?php echo $this->load->view('sidebar'); ?>
    </div>


    <?php echo $this->load->view('footer'); ?>
</body></html>


