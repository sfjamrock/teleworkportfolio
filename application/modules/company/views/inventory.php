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
  </head>
  <body>
    <?php echo $this->load->view('header_new'); ?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">EQUIPMENT LIST</h1>
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
					<?php foreach($equipment_user as $row1) : ?>
                <tr>
                	<th colspan="9" style="text-align:center" >
					<a href="#">
					<?php if (strpos($row1->picture, "http://") === 0) :?>
					<img src="<?php echo $row1->picture; ?>" width="65" height="65"alt="" />
					<?php elseif (isset($row1->picture)) : ?>
					<img src="resource/user/profile/<?php echo $row1->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
					<?php endif; ?>	 </a>  <br />
					<h2><?php echo $row1->firstname?> <?php echo $row1->lastname?></h2></th>
                </tr>
                <tr>
                  <th>Date Issued</th>
                  <th>Item</th>
                  <th>Description</th>
                  <th>Manufacturer</th>
                  <th>Model</th>
                  <th>Model #</th>
                  <th>Condition</th>
                  <th>Appraised</th>
				  <th>Value</th>
                </tr>
              </thead>
				<?php foreach($equipment as $row2) : ?>
				    <?php if($row1->user_id==$row2->user_id) : ?>
              <tbody>
                <tr>                  
					<!-- List of Equipment Start-->
						<td><?php echo $row2->date ?></td>
						<td><?php echo $row2->item?></td>
						<td><?php echo $row2->description?></td>
						<td><?php echo $row2->manufacturer?></td>
						<td><?php echo $row2->model?></td>
						<td><?php echo $row2->model_num?></td>
						<td><?php echo $row2->condition?></td>
						<td><?php echo $row2->appraised?></td>
						<td><?php echo $row2->value?></td>
					<!-- List of Equipment End-->
                </tr>              
		<?php else : ?>
		<?php endif; ?>
		<?php endforeach; ?>
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

