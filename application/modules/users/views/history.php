<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Profile </title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
        <script src="resource/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="resource/js/modernizr.custom.04022.js"></script>
    </head>
    <body>

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
<div class="details_holder">
    	<div class="innerpage_content">
        	<div class="heading">History</div>
            <!--<div class="employee_status_title"><span>Enter Range Information</span> <span class="date">April 2013</span></div>-->
			<?php foreach($history as $history): ?>
	   	  		<div class="history_details">
	            	<div class="text1"><?php echo $history->city?>, <?php echo $history->state?></div>
	                <div class="text2"><?php echo $history->date1?></div>
	                <div class="text3">Miles: <?php echo $history->mile?></div>
	                <div class="text4">Money: <?php echo $history->money?></div>
	                <div class="text5">Time: <?php echo $history->time?></div>
	            </div>
 			<?php endforeach; ?>

        </div>
            <div class="innerpage_sidebar">
<?php echo $this->load->view('sidebar'); ?>
        </div>
</div>
   <?php echo $this->load->view('footer'); ?>

    </body>
</html>