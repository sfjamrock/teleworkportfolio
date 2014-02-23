
<!-- <div class="table-responsive"> -->

<h1 class="heading">Avaliable Hotelling Space</h1>
<!--                    <table class="table table-bordered table-striped">
					<tr>
-->
								
							
						<div class="row">
							<?php $i=1 ?>
							<?php foreach($space as $space1): ?>
    							<?php if($i==9) : ?>
							<!--<td bgcolor="#4659a6">-->
								<div class="col-lg-12" >
									<div class="square_holder">   
									<?php echo $space1->office?>
										
									
								</div>
						
									
							
								<?php else : ?>
							<!-- <td> -->
							<div class="col-md-3" style="padding: 5px;">
									<div class="square_holder" style="padding: 10px;"><?php echo $space1->office?>
									
							</div>
							    <?php endif; ?>
								<?php $i++ ?>
								</div>
	 					  	<?php endforeach; ?>
					</td>
					</tr>		
					</table>	
					</div>		


            
                    <h1 class="heading">Reserved Users List</h1>
                    <div class="hotel_reserve">
                    	<div class="table_header">
                        	<div class="text1">Assignee</div>
                            <div class="text2">Office Location</div>
                            <div class="text3">Date & Time</div>
                        </div>
							<?php foreach($reserve as $reserve): ?>
		                        <div class="table_row">
		                        	<div class="photo"><a href="<?php echo base_url("profile");?>/<?php echo $reserve->username?>">
								<?php if (strpos($reserve->picture, "http://") === 0) :?>
								<img src="<?php echo $reserve->picture; ?>" width="65" height="65"alt="" />
								<?php elseif (isset($reserve->picture)) : ?>
								<img src="resource/user/profile/<?php echo $reserve->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
								<?php endif; ?>	 </a></div>
		                        	<div class="reserver1"><?php echo $reserve->firstname?> <?php echo $reserve->lastname?></div>
		                            <div class="reserver2"><?php echo $reserve->office?></div>
		                            <div class="reserver3"><?php echo $reserve->date?></div>
		                        </div>
							<?php endforeach; ?>

                    </div>
					
					

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>

    <script src="resource/dist/assets/js/docs.min.js"></script>
    <script src="resource/dist/js/holder.js"></script>					