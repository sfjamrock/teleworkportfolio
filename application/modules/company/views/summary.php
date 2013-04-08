
<div class="clear"></div>


 <div>
					<div class="col-blue maxheight" style="text-align:center">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Miles saved</h3>
							<div>
							<h3 class="indent-bot-11"><?php if (empty($telework_tracker->mile)) : ?>
0
									 <?php else : ?>
<?php echo $telework_tracker->mile ?>
					                 <?php endif; ?>

</h3>
							</div>
						</div>
					</div>

					<div class="col-light-blue maxheight" style="text-align:center">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Minutes saved</h3>
							<div>
							<h3 class="indent-bot-11"><?php if (empty($telework_tracker->time)) : ?>
0
									 <?php else : ?>
<?php echo $telework_tracker->time ?>
					                 <?php endif; ?>
</h3>
							</div>
						</div>
					</div>

					<div class="col-green last-col maxheight" style="text-align:center">
						<div class="inner-indernt">
							<h3 class="indent-bot-11">Dollars saved</h3>
							<div>
															<h3 class="indent-bot-11"><?php if (empty($telework_tracker->money)) : ?>
0
									 <?php else : ?>
$<?php echo $telework_tracker->money ?>
					                 <?php endif; ?>
</h3>
							</div>
						</div>
					</div>
					<div class="clear"></div>
			</div>