
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
				<tr>							
							<td colspan="8" style="text-align:center" >  
							<form name="input1" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[0]); $date->sub(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > last week</button>

							<?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?>
							
							<form name="input2" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[6]); $date->add(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > next week</button></form>
							</td>
				 </tr>
				<?php foreach($user_timesheet as $row): ?>
				<tr>
					<td colspan="8" style="text-align:center">
								<a href="#">
								<?php if (strpos($row->picture, "http://") === 0) :?>
								<img src="<?php echo $row->picture; ?>" width="65" height="65"alt="" />
								<?php elseif (isset($row->picture)) : ?>
								<img src="resource/user/profile/<?php echo $row->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
								<?php endif; ?>	 </a><br/>


 						<h2><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></h2></td>
				</tr>

                <tr>
                  <th>LOCATION</th>
                  <th><?php echo date('D m-d', strtotime($dates[0])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[1])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[2])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[3])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[4])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[5])) ?></th>
                  <th><?php echo date('D m-d', strtotime($dates[6])) ?></th>
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
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in);  ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>						
						</td>
						<td>	
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); ?>
										<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $starttime->format('h:i:s');?>
							   	<?php else : ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</td>
						<td>
							<?php foreach($timesheet as $row3) : ?>
								<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
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
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
								<?php $endime = new DateTime($row3->clock_out); ?>
									<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $endime->format('h:i:s');?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
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
					<td> Total Time:
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
									<?php $starttime = new DateTime($row3->clock_in); $endime = new DateTime($row3->clock_out);
											if ($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5])))
												{$interval = $endime->diff($starttime);	echo $interval->format('%h:%i:%s');	}?>
						   	<?php else : ?>
							<?php endif; ?>
						<?php endforeach; ?>
					</td>
					<td>	
						<?php foreach($timesheet as $row3) : ?>
							<?php if($row2->location_id==$row3->location_id && $row2->user_id==$row3->user_id) : ?>
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
       