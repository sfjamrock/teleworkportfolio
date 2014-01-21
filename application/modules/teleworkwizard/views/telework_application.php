<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>" />
	<title>Application for Telework - Telework Portfolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />

	<link rel="stylesheet" href="resource/css/style.css" media="screen" />
	<link rel="icon" href="resource/resource/images/favicon.ico" />
	<link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<script src="resource/js/jquery-1.7.2.min.js"></script>
	<script src="resource/js/superfish.js"></script>
	<script src="resource/js/jquery.responsivemenu.js"></script>
	<script src="resource/js/jquery.equalheights-rt.js"></script>
	<script src="resource/js/script.js"></script>
    <script type="text/javascript" src="resource/js/sliding.form.js"></script>

	    <style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            
        }
    </style>
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/resource/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="resource/js/html5.js"></script>
		<script src="resource/js/jquery.hoverIntent.minified.js"></script>
		<link rel="stylesheet" href="resource/css/ie.css"> 
	<![endif]-->
</head>
<body >
<?php echo $this->load->view('header'); ?>	

 <div id="content">
            <h1>Self Telework Evaluator</h1>
            	<br/><br/>

<br/><br/>
<?php echo validation_errors(); ?>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="teleworkwizard/SelfEvaluation" method="post">
                      <fieldset class="step">
  
							<?php echo $this->load->view('calculator'); ?>
                        </fieldset>
                        <fieldset class="step">
							<?php echo $this->load->view('jobs'); ?>	
                        </fieldset>
                        <fieldset class="step">
							<?php echo $this->load->view('submit'); ?>
                         </fieldset>
                    </form>
                </div>
                <div id="navigation">
                    <ul>
                        <li class="selected">
                            <a>Telework Calculator</a>
                        </li>
                        <li>
                            <a>Job Evaluation</a>
                        </li>
						<li>
                            <a>Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo $this->load->view('footer'); ?>	

</body>
</html>