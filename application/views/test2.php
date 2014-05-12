<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="resource/dist/assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TELEWORK PORFOLIO</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TIMESHEET <b class="caret"></b></a>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMINISTRATOR <b class="caret"></b></a>
                <ul class="dropdown-menu">
            <li><a href="#">DASHBOARD</a></li>
            <li><a href="#">MAP</a></li>
            <li><a href="#">SCHEDULE</a></li>
            <li><a href="#">TIMESHEET</a></li>

            <li><a href="#">EQUIPMENT</a></li>
            <li><a href="#">HOTELLING</a></li>
            <li><a href="#">TASK</a></li>
            <li><a href="#">EMPLOYEES</a></li>

            <li><a href="#">LOCATIONS</a></li>
            <li><a href="#">ALERTS</a></li>
                </ul>

                <ul class="dropdown-menu">
                  <li><a href="#">SCHEDULE</a></li>
                  <li><a href="#">TASK</a></li>
                </ul>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT SETTINGS <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">SETTING</a></li>
                  <li><a href="#">PASSWORD</a></li>
                  <li><a href="#">PROFILE</a></li>
        		  <li><a href="#">LOGOUT</a></li>

                </ul>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">TIMESHEET</a></li>
            <li><a href="#">SCHEDULE</a></li>
            <li><a href="#">TASK</a></li>
          </ul>
          <ul class="nav nav-sidebar">

            <li><a href="#">DASHBOARD</a></li>
            <li><a href="#">MAP</a></li>
            <li><a href="#">SCHEDULE</a></li>
            <li><a href="#">TIMESHEET</a></li>

            <li><a href="#">EQUIPMENT</a></li>
            <li><a href="#">HOTELLING</a></li>
            <li><a href="#">TASK</a></li>
            <li><a href="#">EMPLOYEES</a></li>

            <li><a href="#">LOCATIONS</a></li>
            <li><a href="#">ALETS</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">TIMESHEET</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
					<tr>
						<td colspan="8" style="text-align:center" >
							<form name="input" action="<?php $PHP_SELF ?>" method="post">
							<select name="week">
							  <option value="30-12-2013">December 29, 2013 - January 4, 2014</option> 
							  <option value="6-1-2014">January 5, 2014 - January 11, 2014</option>
							  <option value="13-1-2014">January 12, 2014 - January 18, 2014</option> 
							  <option value="20-1-2014">January 19, 2014 - January 25, 2014</option>
							  <option value="27-1-2014">January 26, 2014 - February 1, 2014</option> 
							  <option value="3-2-2014">February 2, 2014 - February 8, 2014</option>
							  <option value="10-2-2014">February 9, 2014 - February 15, 2014</option> 
							  <option value="15-2-2014">February 15, 2014 - February 22, 2014</option>
						 	  <option value="24-2-2014">February 23, 2014 - March 1, 2014</option>
							  <option value="3-3-2014">March 2, 2014 - March 8, 2014</option>
							  <option value="10-3-2014">March 9, 2014 - March 15, 2014</option>
							  <option value="17-3-2014">March 16, 2014 - March 22, 2014</option>
							  <option value="24-3-2014">March 23, 2014 - April 1, 2014</option>
							</select>
							<input type="submit" value="Update">
							</form>
						</td>
				 </tr>
				<?php foreach($user_timesheet as $row): ?>
				<tr>
					<td colspan="8" style="text-align:center"><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></td>
				</tr>

                <tr>
                  <th><?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?></th>
                  <th>Sun <?php echo date('m-d', strtotime($dates[0])) ?></th>
                  <th>Mon <?php echo date('m-d', strtotime($dates[1])) ?></th>
                  <th>Tue <?php echo date('m-d', strtotime($dates[2])) ?></th>
                  <th>Wed <?php echo date('m-d', strtotime($dates[3])) ?></th>
                  <th>Thur<?php echo date('m-d', strtotime($dates[4])) ?></th>
                  <th>Fri <?php echo date('m-d', strtotime($dates[5])) ?></th>
                  <th>Sat <?php echo date('m-d', strtotime($dates[6])) ?></th>
                </tr>
              </thead>
			  <?php foreach($location_user as $row2): ?>
		   		 <?php if($row->user_id==$row2->user_id) : ?>

              <tbody>
                <tr>
                  <td  rowspan="2"><?php echo $row2->name; ?></td>

					<!-- Clock In Timesheet Area Start-->

						<td>						
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in);  ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>						
						</td>
						<td>	
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[6]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
                </tr>
					<!-- Clock In Timesheet Area End-->
					
					<!-- Clock Out Timesheet Area Start-->
				<tr>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[6]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					 <!-- Clock In Timesheet Area End-->
                </tr>
	
					<!-- TOTAL TIME Timesheet Area Start-->
				<tr>
					<td> Total Time (HH:MM:SS) :
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[6])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					 <!-- TOTAL TIME Timesheet Area End-->
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>
    <script src="resource/dist/assets/js/docs.min.js"></script>
  </body>
</html>
