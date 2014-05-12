<!DOCTYPE html>
<!-- THIS IS THE CAROUSEL MAIN VIEW -->
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
    <link href="resource/dist/css/universalStyle.css" rel="stylesheet">

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
              <a class="navbar-brand" href="#">Telework Portfolio</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="teleworkwizard/test/aboutdash">About</a></li>
                <!--<li><a href="teleworkwizard/test/pricing">Pricing</a></li>-->
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

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h2 class="main_header">Telework Portfolio</h2>
              <p>A employee management and tracking system.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Geolocation tracking:</h1>
              <p>Location and time tracking</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">See the demo!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Return On Investment Reports</h1>
              <p>Know the amount that you are saving utilizing our system</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
             <div class="item">
          <img src="" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Scheduling &amp; Timesheet System</h1>
              <p>Online scheduling tools</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Samples</a></p>
            </div>
          </div>
        </div>
	  </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

 <!--             <p>Inventory reports</p> -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

          <img class="img-circle" data-src="resource/dist/assest/js/holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="resource/dist/assest/js/holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" data-src="resource/dist/assest/js/holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


<!--
<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
</tr> -->
<!--
<tr><td class="active"><strong>Message System</strong></td> </tr>

<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Internal message system (user to user/ user to company/company to users)
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notification system to let user know they got mail
	<br />
	</td>
</tr>

<tr><td class="active"><strong>Badge System</strong></td> </tr>

<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Display achieved badges on profile page
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Having individual badge description pages
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Having badges summary area and page
	<br />
	</td>
</tr>
<tr><td class="active"><strong>User Account System </strong></td> </tr>

<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login: Home page and login page 

	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout: Logout sitewide 
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration: Home page and Sign up page 
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Setting: all pages 
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password Management
	<br />
	</td>
</tr>
<tr><td class="active"><strong>Mobile Ready</strong></td> </tr>
<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The website is fully functional with any device type.
	<br />
	</td>
</tr>
<tr><td class="active"><strong>Company Return On Investment System</strong></td> </tr>
<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leaderboard <br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teleworker (Accepted vs. Requests)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hoteling Space manager (Paid)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equipment Inventory manager (Paid)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Savings (Paid)<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stats Performance (Paid)
	</td>
</tr>
<tr><td class="active"><strong>User Return On Investment System</strong></td> </tr>
<tr>
	<td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Savings 
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Badges
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performance 
	<br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Job Evaluator
	<br />
	</td>
</tr>
-->
  </table>
</div>
<!-- End Features Listing -->
<hr height="1px" />
<a name="contact"></a>
<div class="table-responsive align-center">
  <table class="table table-bordered table-condensed table-bg">
<th >Contact Us</th>  
<tr>
<td class="active">
<strong>We want to hear from you.</strong><br>
</td>
</tr>
<tr>
<td>
<br>If you would like more information about any of the services that Telework Portfolio offer, please contact us by using any of the following methods:
<br>
<h3>Contact Information:</h3>
                        <h3>Sean Fuller</h3>
                      
                        Email: <a href="mailto:sfuller@teleworkportfolio.com">sfuller@teleworkportfolio.com</a>
</td>
</tr>
</table>
</div>

<hr width="80%" style="color: red !important; border: 5 !important" />
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#about" data-toggle="tab">About Us</a></li>
  <li><a href="#contact" data-toggle="tab">Contact</a></li>
  <li><a href="#features" data-toggle="tab">Features</a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="about">
  <!--About Us Content-->
  <div class="benefit_buttons"><h1>About Us</h1></div>

<p>
<i>
Do you want to work from home more? Telework Portfolio gives you the 
tool you need to find out if telework is right for you. </i><br><br>
Telework Portfolio offers telework analytics tool to companies to track, manage and measure their telework saving.  
</p><h3>MISSION</h3>

To make telework a SMART option for companies and employees.  

<br>
<h3>About Telework Portfolio Founder Sean Fuller</h3>

Telework Portfolio was founded in December of 2012 by Sean Fuller. Sean is CEO of Telework Portfolio, an entrepreneur, and a Web Developer.
<br><br>
Sean stumbled onto the idea of Telework after attending a telework conference at his job. He was constantly trying to find more cost effective ways to get to work, and was frustrated with the options he had, leading him to coin the phrase “I love my Job, I hate going to work”
<br><br>

 <!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff;  font:14px Helvetica,Arial,sans-serif;  width:400px; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://teleworkportfolio.us6.list-manage2.com/subscribe/post?u=f367b28b6845a01365eda03e6&amp;id=8659d52cfd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required="">
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
</div>
<!--  Contact Us content -->

  <div class="tab-pane fade" id="contact">
  	&nbsp;
  </div>
  <div class="tab-pane fade" id="features">Features Content</div>

</div>
<hr height="4px" color="#ff0000" />

      <!-- START THE FEATURETTES -->
      
	  
	  <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="resource/dist/assest/js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="resource/dist/assest/js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="resource/dist/assest/js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

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
