<!DOCTYPE html>
<!-- THIS IS THE ABOUT VIEW -->
<html lang="en">
  <head>

	<base href="<?php echo base_url();?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="shortcut icon" href="../dist/assets/ico/favicon.ico"> -->

    <title>Telework Portfolio</title>
    <!-- Bootstrap core CSS -->
    <link href="resource/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="resource/dist/css/universalStyle.css" rel="stylesheet">
	<style>

/*	table
	{
	horizontal-align:middle;
	vertical-align: middle;
	width: 80%;
	margin-left: auto ;
	margin-right: auto ;
	}
	*/
	.table-bg
	{
	background-color:#a0a0a0;
	text-align:middle;
	color: #000;	
	}
	a:link,visited,active
	{
		text-decoration: none;
		link-color:#000;
		color:#000;
	}
	a:hover
	{
		color:#fff;
	}
	</style>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Telework Portfolio</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
               <li><a href="teleworkwizard/test/aboutdash">About</a></li>
                <li><a href="teleworkwizard/test/pricing">Pricing</a></li>
                <li><a href="teleworkwizard/test/contact">Contact</a></li>
                <li><a href="teleworkwizard/test/features">Features</a></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right">
			  		<li><a href="#login">Login</a></li>
					<li class="divider"></li>
                	<li><a href="#sign_up">Sign up!</a></li>
                	
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					
			  </ul>  
              
            </div>
          </div>





        </div>
		<div class="spacer">&nbsp;</div>
		<div class="spacer">&nbsp;</div>
&nbsp;
	

 
        <div class="row">
  <div class="col-xs-6">

                <strong>We want to hear from you.</strong><br><br>If you would like more information about any of the services that Telework Portfolio offer, please contact us by using any of the following methods:</div>
                <div class="contact_info">
                	<h2>Contact Info Area:</h2>
                    <ul>
                    	<li>Full Name:</li>
                        <li class="big">Sean Fuller</li>
                      <!--  <li>Address:</li>
                        <li class="big">Address Goes Here.....</li>
                        <li>Phone:</li>
                        <li class="big">Phone Goes Here.....</li>
                        <li>Fax:</li>
                        <li class="big">Fax Goes Here.....</li>-->
                        <li>Email:</li>
                        <li class="big">sfuller@teleworkportfolio.com</li>
                    </ul>
                </div>
                <div class="follow_us">
                	Follow Us:<br><a href="http://www.facebook.com/TeleworkPortfolio" target="_blank"><img src="resource/images/facebook.png" alt=""></a> <!--<a href="#"><img src="resource/images/twitter.png" alt="" /></a> <a href="#"><img src="resource/images/google.png" alt="" /></a> <a href="#"><img src="resource/images/openid.png" alt="" /></a> <a href="#"><img src="resource/images/yahoo.png" alt="" />--> 
                </div>
            </div>

  <div class="col-xs-6">
  	
      
            	<div class="header">Leave us a Message</div>
                <div class="form_holder">
				<form name="contact_us" action="contact_us/send_contact_us_info" enctype="multipart/form-data" method="post">

                	<div class="text2">First Name:</div>
                	<div class="text3"><input name="contact_us_firstname" id="contact_us_firstname" type="text" size="28"></div>
                    <div class="text2">Last Name:</div>
                	<div class="text3"><input name="contact_us_lastname" id="contact_us_lastname" type="text" size="28"></div>
                    <div class="text2">Email:</div>
                	<div class="text3"><input name="contact_us_email" id="contact_us_email" type="text" size="28"></div>
                    <div class="text2">Comments:</div>
                	<div class="text4">
                	  <textarea name="contact_us_comment" id="contact_us_comment" cols="25" rows="5"></textarea>
               	  </div>
                  <div class="btn_holder"><input type="image" src="resource/images/send.png" alt="Submit Form"></div>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
<hr class="featurette-divider">
      <!-- FOOTER -->
	  <div class="center-block">
      <footer align="center">
         <p>&copy; 2014 Telework Portfolio, LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>

    <script src="resource/dist/assets/js/docs.min.js"></script>
    <script src="resource/dist/js/holder.js"></script>
  </body>
</html>
