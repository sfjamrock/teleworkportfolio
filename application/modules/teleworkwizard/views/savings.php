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
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="resource/js/newGeo.js"></script>
<meta charset="utf-8"/>
</head><body onload="initialize()">
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <h2>Clock-in</h2>
        <div class="savings_tracker"><strong class="heading">To complete the Clock-In session, select your site location.</strong><br /><br />
		<span class="text1">Employee: </span> <span class="text2"><?php echo $account_details->firstname ?> <?php echo $account_details->lastname ?><br /></span>
        </div>
 
        <div class="savings_tracker">
                            <div class="savings_tracker_form">
                    <form id="saving" name="saving" action="teleworkwizard/savings/clock_in" method="post">
					<?php echo validation_errors(); ?>
<p id="map" style="width:40%; height:40%"></p>

<div class="text1">Job Site:</div>
<div class="text2">
<select name="jobsiteid">
  <option value="1">0347 - Ashley Stewart - 7001 Martin Luther King Ave, Landover Md,20785</option>
  <option value="2">0326 - Forever 21 - 2401 Liberty Heights Ave, Baltimore Md, 21215</option>
  <option value="3">1347 - TJ Maxx - 3500 East West Highway, Hyattsville Md, 20782</option>
  <option value="4">11200 - Rite Aid - 3250 Superior Lane, Bowie Md, 20715</option>
  <option value="5">Bowie State University - 14000 Jericho Park Rd</option>
  <option value="6">Lane Bryant - Baltimore, Md, 21228</option>
  <option value="7">1200 - Marshalls - 600 East Pratt Street, Baltimore MD, 21202</option>
  <option value="8">3813 - Rite Aid - 9530 Crain Highway, Upper Marlboro Md, 20772</option>
</select>
</div>
               <input type="hidden" name="lat" id="lat" value=""><br/>
               <input type="hidden" name="long" id="long" value="" >
                                <div class="text1">&nbsp;</div>
                                <div class="text3"><INPUT TYPE="image" SRC="resource/images/submit.png" ALT="Submit Form" ></div>
                    </form>
        </div></div>
        
    </div>
   <?php echo $this->load->view('footer'); ?>
</body></html>