 <div>
					<div class="col-blue maxheight" style="text-align:center">
						<div class="inner-indernt">
							<div>
								<p>  								
<br/>							
									 <?php if (empty($account->password) && empty($account_details->picture)) : ?>
					                 <img src="../../myTIMS/views/resource/img/default-picture.gif" alt="" />
									 <?php elseif (empty($account->password) && isset($account_details->picture)) : ?>
 									 <img src="../../myTIMS/views/<?php echo $account_details->picture; ?>" alt="" />
									 <?php elseif (isset($account_details->picture)) : ?>
					                 <img src="../../myTIMS/views/resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>" alt="" />
									 <?php else : ?>
					                 <img src="../../myTIMS/views/resource/img/default-picture.gif" alt="" />
					                 <?php endif; ?>
								


							</div>
						</div>
					</div>

					<div class="col-light-blue maxheight" style="text-align:center">
						<div class="inner-indernt">
							<h3 class="indent-bot-11"><?php echo $account_details->fullname ?></h3>
							<div>

							</div>
						</div>
					</div>
					<div class="col-green last-col maxheight" style="text-align:center">
						<div class="inner-indernt">
							<h3 class="indent-bot-11"><?php if (empty($eligible_tracker->job_title)) : ?>
Tester
									 <?php else : ?>
<?php echo $eligible_tracker->job_title ?>
					                 <?php endif; ?>
</h3>
							<div>
							<!--	<div class="btns"><a href="<?php echo base_url(); ?>teleworkwizard" class="button green">Update Job Info</a> </div><br/>-->
							</div>
						</div>
					</div>
					<div class="clear"></div>
			</div>