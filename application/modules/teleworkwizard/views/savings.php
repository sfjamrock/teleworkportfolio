<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
		<base href="<?php echo base_url(); ?>" />

<link href="resource/css/style.css" rel="stylesheet" type="text/css" />

<script src="resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="resource/js/menu-collapsed.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="resource/css/accordian.css" />
<link rel="icon" href="resource/images/favicon.ico" />
<link rel="shortcut icon" href="resource/images/favicon.ico" />

<!--[if lt IE 8]>
<style type="text/css">
li a {display:inline-block;}
li a {display:block;}
</style>
<![endif]-->

</head><body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <h2>Username's Saving Tracker</h2>
        <div class="savings_tracker"><strong class="heading">For information on each field please read description below</strong><br /><br />
<span class="text1">Miles: </span> <span class="text2">Enter in this field the total number of miles traveled to and from work on a average day<br /></span>
<span class="text1">Time: </span> <span class="text2">in this field the total time traveled to and from work on a average day<br /></span>
<span class="text1">Money: </span> <span class="text2">Enter in this field the average amount sent at work on a average day. Click to see example<br /></span>
        </div>
        <div class="savings_tracker">
                            <div class="savings_tracker_form">
                    <form id="saving" name="saving" action="teleworkwizard/savings/saving_tracker" method="post">
<?php echo validation_errors(); ?>                                <div class="text1">Miles:</div>
                                <div class="text2"><input name="mile" id="mile" type="text" value="<?php echo set_value('mile'); ?>"/></div>
                                <div class="text1">Time:</div>
                                <div class="text2"><input name="time" id="time" type="text" value="<?php echo set_value('time'); ?>"/></div>
                                <div class="text1">Money:</div>
                                <div class="text2"><input name="money"  id="money" type="text" value="<?php echo set_value('money'); ?>"/></div>
                                <div class="text1">&nbsp;</div>
                               
                                <div class="text3"><INPUT TYPE="image" SRC="resource/images/submit.png" ALT="Submit Form" ></div>
                    </form>
        </div></div>
        
    </div>
   <?php echo $this->load->view('footer'); ?>
</body></html>