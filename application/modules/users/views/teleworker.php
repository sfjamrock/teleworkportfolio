<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Teleworker </title>
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
<div id="main">
    <?php echo $this->load->view('header'); ?>
    	   
      <div class="details_holder">
        <div class="company_beenefits">
        	<div class="title">Hello Self Evaluation and Savings</div>
            <div class="updater_mockup_text"><strong>Telework Savings</strong></div>
            <div class="savings_holder">
            	<ul>
                	<li>$<?php echo $check['0']->money ?></li>
                    <li><?php echo $check['0']->mile ?> miles</li>
                    <li class="nospace"><?php echo $check['0']->time ?> minutes</li>
                </ul>
            </div>
            <div class="updater_mockup_text"><strong>Job Evaluation</strong></div><br/>
            <div class="updater_mockup_text">Job Title: <?php echo $task['0']->title ?></div><br/>
            <div class="updater_mockup_text">Job Description: <?php echo $task['0']->description ?></div>
            <div class="job_details">
            	<ul>
                	<li><strong>Eligible Telework Task</strong></li>
<?php if (isset($first)) : ?>
					<?php foreach ($first as $row):?>
                    <li style="text-align:left"><?php echo $row['task'] ?></li>
					<?php endforeach ;?>
<?php endif; ?>
                </ul>
                <ul>
                	<li><strong>Non Eligible Telework Task</strong></li>
<?php if (isset($second)) : ?>
					
<?php foreach ($second as $row):?>
                    <li style="text-align:left"><?php echo $row['task'] ?></li>
					<?php endforeach ;?>
<?php endif; ?>
                </ul>
            </div>
<?php if ($this->session->userdata('account_id')!= $this->uri->segment(4,$this->session->userdata('account_id'))) : ?>
            <div class="update_button"><a href="<?php echo base_url("teleworkwizard");?>"><img src="resource/images/update.png" alt="" /></a>
</div>
<?php endif; ?>

            <div class="updater_mockup_text"><strong>Similar Users by Occupation</strong></div>
            <div class="similer_users">
            	<ul>
<?php foreach ($similar as $row):?>
                	<li><a href="<?php echo base_url("profile");?>/<?php echo $row->username?>">


<?php if (strpos($row->picture, "http://") === 0) :?>
					<img src="<?php echo $row->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($row->picture)) : ?>
					<img src="resource/user/profile/<?php echo $row->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
</a> <?php echo $row->firstname?> <?php echo $row->lastname?><br /><?php echo $row->job_title?><br /><?php echo $row->city?>, <?php echo $row->state?></li>
<?php endforeach ;?>
                </ul>
            </div>
        </div>
    </div>

   <?php echo $this->load->view('footer'); ?>

    </body>
</html>