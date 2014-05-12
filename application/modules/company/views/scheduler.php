<!DOCTYPE html>
<html lang="en">
  <head>
	<base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="resource/images/favicon.ico" />
	<script type="text/javascript" src="resource/js/tabcontent.js"></script>
    <title>EMPLOYEE HOURS</title>
    <!-- Bootstrap core CSS -->
    <link href="resource/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap datetime picker -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    <!-- Custom styles for this template -->
    <link href="resource/dist/css/dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="resource/dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php echo $this->load->view('header_new'); ?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">WEEKLY SCHEDULE</h1>
			 <div class="shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">VIEW SCHEDULE</a></li>
                    <li><a href="#" rel="country2">CREATE SCHEDULE</a></li>
                </ul>
             </div>
             <div class="tab_content">

                <div id="country1" class="tabcontent"><?php echo $this->load->view('schedule_view'); ?></div>
                <div id="country2" class="tabcontent"><?php echo $this->load->view('schedule_admin'); ?></div>

             </div>  
           </div>  
		 </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>
    <script src="resource/dist/assets/js/docs.min.js"></script>

	<script type="text/javascript">
		var countries=new ddtabcontent("countrytabs")
		countries.setpersist(true)
		countries.setselectedClassTarget("link") //"link" or "linkparent"
		countries.init()
	
		var countries=new ddtabcontent("othertabs")
		countries.setpersist(true)
		countries.setselectedClassTarget("link") //"link" or "linkparent"
		countries.init()
	</script>

 </body>
</html>

                	