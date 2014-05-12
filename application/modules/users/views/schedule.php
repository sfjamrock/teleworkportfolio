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
    <title>Employee Timesheet</title>
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
      <h1 class="page-header">WEEKLY SCHEDULE</h1>
        <div class="row">
	        <div class="col-md-12" style="text-align:center; font-size:xx-large">
	        		<?php if (empty($this->user_model->Check_user_clockin_status($this->session->userdata('account_id'))->status) ):?>
					<a href="<?php echo base_url("teleworkwizard/clockin");?>">Clock-IN</a>
					
					<?php elseif ($this->user_model->Check_user_clockin_status($this->session->userdata('account_id'))->status == 1) :?>
					<a href="<?php echo base_url("teleworkwizard/clockout");?>">Clock-Out</a>
					<?php else :?>
					<a href="<?php echo base_url("teleworkwizard/clockin");?>">Clock-IN</a>
					<?php endif; ?>
			</div>
     	  </div>    
<div style="clear:both;"><br/> <br/>


 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
					<tr>							
							<td colspan="6" style="text-align:center" >  
							<form name="input1" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[0]); $date->sub(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > last week</button>

							<?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?>
							
							<form name="input2" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[6]); $date->add(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > next week</button></form>
							</td>
				 </tr>

                <tr>
                  <th>Date</th>
                  <th>Day</th>
                  <th>Location</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Total Schedule Hours</th>
                </tr>
              </thead>

              <tbody>
 			<?php foreach($schedule as $row): ?>
<?php $datetime1 = new DateTime($row->start_time); 	$datetime2 = new DateTime($row->end_time); $interval = $datetime1->diff($datetime2); ?>

<?php if($interval->format('%h:%i:%s') != '0:0:0')  :?>
                <tr>
                  <td><?php echo $row->date1?></td>
                  <td><?php echo $row->date2?></td>
                  <td><?php echo $row->location?></td>
                  <td><?php $startime = new DateTime($row->start_time); echo $startime->format('h:i:s'); ?></td>
                  <td><?php if (isset($row->end_time)){$endime = new DateTime($row->end_time); echo $endime->format('h:i:s');} ?></td>
                  <td><?php if (isset($row->end_time))
							{
							$datetime1 = new DateTime($row->start_time);
	 						$datetime2 = new DateTime($row->end_time);
	 						$interval = $datetime1->diff($datetime2);
	 						echo $interval->format('%h:%i:%s'); 
						}?>
				  </td>
                </tr>
<?php endif;?>
			<?php endforeach; ?>
              </tbody>
            </table>
          </div>  			
<!-- Test Area start -->
<!-- Test Area start -->	
        </div>
      </div>
    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>
    <script src="resource/dist/assets/js/docs.min.js"></script>
  </body>
</html>
