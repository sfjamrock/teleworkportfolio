<!--C:\xampp\htdocs\teleworkportfolio\application\modules\teleworkwizard\views\clockin.php-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
		<base href="<?php echo base_url(); ?>" />

<script src="resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<link rel="icon" href="resource/images/favicon.ico" />
  <link href="resource/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="resource/js/jquery-2.0.3.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<link rel="shortcut icon" href="resource/images/favicon.ico" />
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<meta charset="utf-8"/>
<style>
	.p{
	width: 0px;
	height: 0px;
}
.clockin
{
	font-family:lucida sans unicode, lucida grande, sans-serif; 
	text-decoration:none; 
	display:inline-block;
	font-weight:bold; 
	color: #FFFFFF;
	background-color: #6E6663; 
	background-image: linear-gradient(to bottom, #6E6663, #000000);
}

.inset
	{
	display:block;
	width:150px;
	height:150px;
	border-radius:75px;
	font-size:20px;
	color:#eee;
	line-height:150px;
	text-shadow:0 0 1px #1e1e1e;
	text-align:center;
	text-decoration:none;
	opacity:0.95;
	box-shadow:0 0 4px #222 inset;
	}
.va
{	
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
}

</style>

</head>

<body onload="getLocation()">
<!--<?php
$emaildate = date("d/m/Y"); // set email date
$servertime = time ();
$testtime= $servertime - 18000;
$emailtime = date("G:i",$servertime); // set email time
$submittime = $emailtime - 18000; // set email time
//$user_id = "Test";
?>
-->


<p></p>
<p></p>
<form action="teleworkwizard/savings/clockin" method="post">
<div class="row">

<p></p>
<p></p>
<p></p>
<div class="col-xs-12 col-md-4">
Jobsite:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="jobsite">
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
		<br>
		
		
		
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="hidden" name="zealot" id="zealot" /><br/>
        <input type="hidden" name="latitude" id="latitude"><br/>
		<input type="hidden" name="longitude" id="longitude">
		<input type="hidden" name="status" value="0">
		<input type="hidden" name="derive_fields" value="Date=%dom0%.%'/'%.%moy0%.%'/'%.%fullyear%,Time=%hour240%.%':'%.%min%" />		
		
<p></p>
<br class="va">

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
  
</script>   
</body></html>