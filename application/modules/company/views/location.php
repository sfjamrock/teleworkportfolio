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
    <title>Company Timesheets</title>
    <!-- Bootstrap core CSS -->
    <link href="resource/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="resource/dist/css/dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="resource/dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	.auto-style1 {
		text-align: center;
	}
	</style>
  </head>
  <body>
    <?php echo $this->load->view('header_new'); ?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">LOCATION LIST</h1>
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>                
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th class="auto-style1">Action</th>
                </tr>
              </thead>
              <tbody>
				<tr>
				<form name="input" action="company/location/add_location" method="post">
					<input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
					<td><input type="text" name="location_name" placeholder="Location Name"></td>
					<td><input type="text" name="location_address" placeholder="Location Address"></td>
					<td align="center" ><button type="button" class="btn-primary" onclick="submit()">Add Location</<button></td>
				</form>
				</tr>

			<?php foreach($location_lookup as $row): ?>
				<tr>				
					<td><?php echo $row->name; ?></td>
					<td> <?php echo $row->address; ?></td>
					<td align="center"><button type="button">Delete?</button></td>
				</tr>
			<?php endforeach; ?>

              </tbody>
            </table>
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
