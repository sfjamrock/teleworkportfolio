<h1 class="heading">Avaliable Hotelling Space</h1>
                    <div class="hotelling_space">
                    	<ul>
							
							<?php $i=1 ?>
							<?php foreach($space as $space1): ?>
    							<?php if($i==9) : ?>
									<li class="nospace"><?php echo $space1->office?></li>
								<?php else : ?>
									<li><?php echo $space1->office?></li>
							    <?php endif; ?>
								<?php $i++ ?>
	 					  	<?php endforeach; ?>
                        </ul>
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