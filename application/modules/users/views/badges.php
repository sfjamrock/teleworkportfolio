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
		<link rel="stylesheet" type="text/css" href="resource/css/style2.css" />
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

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
     <div class="details_holder">
    	<div class="innerpage_content">
        	<div class="main_box_container">
            	<div class="img_holder"><a href="<?php echo base_url("users/profile/lookup");?>/<?php echo $this->uri->segment(4,$account->username);?>">  
					<?php if (strpos($account_details->picture, "http://") === 0) :?>
					<img src="<?php echo $account_details->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($account_details->picture)) : ?>
					<img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
	</a></div>
                <div class="text_holder"><?php echo $account_details->firstname ?>'s Telework Badges<br /><br />These are the core badges dreamt up by the members of the Teleworkportfolio team, for things like regular teleworking from home or teleworking on the go to teleworking at your neighborhood coffee shop.</div>
            </div>
            <div class="badges_shadetabs">
            	<ul>
                	<li><a href="#">All Badges</a></li>
                    <li><a href="#">Telework Portfolio</a></li>
                    <li><a href="#">Specialist</a></li>
                    <li><a href="#">Limited edition</a></li>
                    <li><a href="#">Partner</a></li>
                </ul>
            </div>
            <div class="badges_details">
            	<ul>
                	<li><a href="#"><strong>Alpha Team</strong></a><br /><br /><img src="resource/badges/Alpha.png" alt="" weight="75" height="75"/><br /><br />Earn date</li>
                    <li><a href="#"><strong>Beta Team</strong></a><br /><br /><img src="resource/badges/Beta.png" alt="" weight="75" height="75" /><br /><br />Earn date</li>
                    <li><a href="#"><strong>Money in the Bank</strong></a><br /><br /><img src="resource/badges/Money_Bank.png" alt="" weight="75" height="75"  /><br /><br />Earn date</li>
                    <li class="nospace"><a href="#"><strong>No Traffic</strong></a><br /><br /><img src="resource/badges/No_Traffic.png" alt="" weight="75" height="75"  /><br /><br />Earn date</li>
                    <li><a href="#"><strong>Enlist</strong></a><br /><br /><img src="resource/badges/Enlist.png" alt="" weight="75" height="75"  /><br /><br />Earn date</li>
                    <li><a href="#"><strong>Rookie</strong></a><br /><br /><img src="resource/badges/Rookie.png" alt="" weight="75" height="75"/><br /><br />Earn date</li>
                    <li><a href="#"><strong>Team Telework</strong></a><br /><br /><img src="resource/badges/team.png" alt="" weight="75" height="75" /><br /><br />Earn date</li>
                    <li class="nospace"><a href="#"><strong>Power in Numbers</strong></a><br /><br /><img src="resource/badges/power_in_numbers.png" alt="" weight="75" height="75" /><br /><br />Earn date</li>
                </ul>
            </div>
        </div>
        <div class="innerpage_sidebar">
<?php echo $this->load->view('sidebar'); ?>
        </div></div>

   <?php echo $this->load->view('footer'); ?>

    </body>
</html>