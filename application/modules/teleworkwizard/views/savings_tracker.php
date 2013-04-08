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
        	<ul class="box">
            	<li>Miles</li>
                <li>Times</li>
                <li>Money</li>
            </ul>
        </div>
        <div class="savings_tracker">
            <ul id="menu">
            	<li><a href="#">Same as last</a></li>
                <li><a  href="#" >Edit</a>
                    <ul>
                        <li>
                            <div class="savings_tracker_form">
                                <div class="text1">Miles:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">Time:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">Money:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">&nbsp;</div>
                                <div class="text2">
                                    <div class="text_holder">
                                        <ul>
                                            <li>Task - 01</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                            <li>Task - 02</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                            <li>Task - 03</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text2"><a href="#"><img src="resource/images/Submit.png" alt="" /></a></div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </div>
   <?php echo $this->load->view('footer'); ?>
</body></html>