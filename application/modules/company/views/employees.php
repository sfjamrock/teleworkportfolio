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
    <title>Employee Center</title>
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
          <h1 class="page-header">EMPLOYEES CENTER</h1>
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>                
                <tr>
                  <th>FIRST NAME</th>
				  <th>LAST NAME</th>
				  <th>EMAIL</th>
				  <th>PASSWORD</th>
                  <th class="auto-style1">ACTION</th>
                </tr>
              </thead>
              <tbody>
				<tr>
				<form name="input" action="company/employees/add_employee" method="post">
					<input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
					<td><input type="text" name="sign_up_firstname" placeholder="First Name"></td>
					<td><input type="text" name="sign_up_lastname" placeholder="Last Name"></td>
					<td><input type="text" name="sign_up_email" placeholder="Email"></td>
					<td><input type="password" name="sign_up_password" placeholder="Password"></td>
					<td align="center" ><button type="button" class="btn-primary" onclick="submit()">Add Employee</<button></td>
				</form>
				</tr>
             </tbody>
            </table>
          </div>


		<div class="table-responsive">
            <table class="table table-striped">
              <thead>                
                <tr>
                  <th>PICTURE</th>
                  <th>FIRST NAME</th>
				  <th>LAST NAME</th>
                  <th class="auto-style1">ACTION</th>
                </tr>
              </thead>
              <tbody>
					<?php foreach($enroll as $enroll): ?>
						<tr>
							<td>
								<?php if (strpos($enroll->picture, "http://") === 0) :?>
								<img src="<?php echo $enroll->picture; ?>" width="75" height="75"alt="" />
								<?php elseif (isset($enroll->picture)) : ?>
								<img src="resource/user/profile/<?php echo $enroll->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
								<?php endif; ?>	 
							</td>				
							<td><?php echo $enroll->firstname?></td>
							<td><?php echo $enroll->lastname?></td>
							<td align="center">
									<form action="" method="post">
									<input type="hidden"  name="user"value="<?php echo $enroll->username?>"/> 
									<button type="submit" id="accept" name="company"value="<?php echo $this->uri->segment(1)?>"/>Profile</button>
								</form>

									<form action="company/employees/reject" method="post">
									<input type="hidden"  name="user"value="<?php echo $enroll->username?>"/> 
									<button type="submit" id="accept" name="company"value="<?php echo $this->uri->segment(1)?>"/>Reject</button>
								</form>
							</td>
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
