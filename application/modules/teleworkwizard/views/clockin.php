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
<link href="css/geostyle.css" rel="stylesheet"/>
  <link href="resource/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="resource/js/jquery-2.0.3.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<link rel="shortcut icon" href="resource/images/favicon.ico" />
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="resource/js/newGeo.js"></script>
<meta charset="utf-8"/>
</head>

<body onload="getLocation()">
<?php echo $this->load->view('header'); ?>
<?php
$emaildate = date("d/m/Y"); // set email date
$servertime = time ();
$testtime= $servertime - 18000;
$emailtime = date("G:i",$servertime); // set email time
$submittime = $emailtime - 18000; // set email time
$id = "Test";

?>

<pq></pq>
<p></p>
<p></p>
<form action="teleworkwizard/savings/clockin" method="post">
<div class="row">
<div class="col-xs-12 col-md-4">
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<p></p>
<p></p>
<p></p>
<div class="col-xs-12 col-md-4">
Company:&nbsp;&nbsp;<input type="text" name="company">&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<p></p>
<p></p>
<p></p>
<div class="col-xs-12 col-md-4">
Jobsite:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="jobsite" id="jobsite">
			<option value="1" id="jobsite">Jobsite One</option>
			<option value="2" id="jobsite">Jobsite Two</option>
			<option value="3" id="jobsite">Jobsite Three</option>
			<option value="4" id="jobsite">Jobsite Four</option>
		</select>
</div>		
		<br>
		<input type="hidden" name="id" id="id" value="<? echo($id) ?>"/><br/>
		<!-- The above field should be populated by the login ID of the current user. -->
		
		
		
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="hidden" name="zealot" id="zealot" /><br/>
        <input type="hidden" name="latitude" id="latitude"><br/>
		<input type="hidden" name="longitude" id="longitude">
		<input type="hidden" name="status" value="0">
		<input type="hidden" name="derive_fields" value="Date=%dom0%.%'/'%.%moy0%.%'/'%.%fullyear%,Time=%hour240%.%':'%.%min%" />		

<p></p>
<br class="va">
<!--<?php echo($test)?>-->
<button type="button" class="va inset clockin" onclick="submit()">Clock-in!</button>
</br>
</div>		
</form>
 
<script>
var x=document.getElementById("latitude");
var y=document.getElementById("longitude");
var z=document.getElementById("zealot");

function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
    }
	else {
	showError();
	}
  }
function showPosition(position)
  {
  x.value=position.coords.latitude;  
  y.value=position.coords.longitude;    
  }
function showError(error)
  {
	
	z.value=error.code;
	
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
	 z.value="User denied the request for Geolocation.";
      var test="User denied the request for Geolocation.";
      break;
    case error.POSITION_UNAVAILABLE:
      z.value="Location information is unavailable.";
      break;
    case error.TIMEOUT:
      z.value="The request to get user location timed out.";
      break;
    case error.UNKNOWN_ERROR:
      z.value="An unknown error occurred.";
      break;
    }
  }
  
</script>   <?php echo $this->load->view('footer'); ?>
</body></html>