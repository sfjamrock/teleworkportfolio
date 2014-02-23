<?php if ($this->authentication->is_signed_in()) : ?>
<link href="resource/dist/css/universalStyle.css" rel="stylesheet" type="text/css" />
<link href="resource/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--<link href="resource/css/style.css" rel="stylesheet" type="text/css" /> -->
<!--<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" /> -->

<style type="text/css"> 
  html { height: 100% }
  body { height: 50%; margin: 0; padding-bottom: 700px;  padding: 0 }
  #map_canvas { height: 100% }
</style>

<div class="header">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resource/dist/js/bootstrap.min.js"></script>
<!--<div class="logo"><a href="<?php echo base_url("");?>"><img src="resource/images/logo.png" alt="" height="100" width="200"/></a></div>-->
<!-- ***************************************************************************************************************** -->
<!-- Begin authenticated users navigation bar. -->
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-default navbar-static-top navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand inset-text" href="#">Telework Portfolio</a>
              <!--<a class="navbar-brand" href="#">Welcome, <?php echo $company->cusername?></a>-->
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-right">
                <li><a href="#alerts">Alerts</a></li>
                <!--<li><a href="teleworkwizard/test/pricing">Pricing</a></li>-->
                <li>
					<a href="#message">
						Message
					</a>
				</li>
				<!-- Begin dropdown menu -->
                <li class="dropdown">					
				<a  class="data-toggle" data-toggle="dropdown" href="#1" >Options<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a name="1" href="<?php echo base_url("account_settings");?>">
							Account Settings				
						</a>
					</li>
					<?php if($test1=$this->company_model->manager_lookup($this->session->userdata('account_id'))) :?>
					<?php foreach($test1 as $row): ?>
  					<!--
					<li><a href="<?php echo htmlspecialchars(base_url("").$row->cusername.'/analytics');?>">
					<?php echo $row->cusername; ?> Analytics</a></li>
					-->
 					<li>
					<a href="<?php echo htmlspecialchars(base_url("").$row->cusername);?>">
					<?php echo $row->cusername; ?>&nbsp;Dashboard
					</a>
					</li>
					<?php endforeach; ?>
					<?php endif; ?>
					<!--
					<li>
						<a href="<?php echo base_url("history");?>">
							History
						</a>
					</li>-->
					
				</ul>
				</li>
			  		<li><a href="<?php echo base_url("account/sign_out");?>"><strong>Logout</strong></a></li>
					<li class="divider"></li>
                	<!-- <li><a href="<?php echo base_url("sign_up");?>">Sign up!</a></li>-->
                	
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					
			  </ul>  
			  
            </div>
          </div>
        </div>

      </div>
    </div>
<!-- End authenticated users navigation bar. -->
<!-- ***************************************************************************************************************** -->
<!-- ***************************************************************************************************************** -->
<!-- Begin unauthenticated users navigation bar. -->
 
	   <?php else : ?>
  <head>

	<base href="<?php echo base_url();?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="shortcut icon" href="../dist/assets/ico/favicon.ico"> -->

    <title>Telework Portfolio</title>
    <link href="resource/dist/css/universalStyle.css" rel="stylesheet">
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
    <link href="resource/dist/css/carousel.css" rel="stylesheet">
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

        <div class="navbar navbar-default navbar-static-top navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand inset-text" href="#"><strong>Telework Portfolio</strong></a>


            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--<li><a href="#about">About</a></li>-->
                <!--<li><a href="teleworkwizard/test/pricing">Pricing</a></li>-->
                <!--<li><a href="#contact">Contact</a></li>-->
                <!--<li><a href="#features">Features</a></li>-->
          	</ul>
			  <ul class="nav navbar-nav navbar-right">
			  		<li><a href="<?php echo base_url("sign_in");?>">Login</a></li>
					<li class="divider"></li>
                	<li><a href="<?php echo base_url("sign_up");?>">Sign up!</a></li>
                	
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					
			  </ul>  
			  
            </div>
          </div>
        </div>

      </div>
    </div>
	<hr />
 		<?php endif; ?>


	</div>	
