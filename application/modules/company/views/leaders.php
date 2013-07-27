 <h1 class="heading">Active Teleworkers</h1>
                    <div class="leader_map" id="default" style="width:100%; height:100%"></div>
                    <div class="leader_details">
                    	<div class="table_header">
                        	<div class="text1">Leader Board</div>
                        	<div class="text2"># of Check-In for the last 60 days</div>
                        </div>
						<?php $v=1?>
						<?php foreach($leader as $leader): ?>
                        <div class="table_row">
                        	<div class="text1">#<?php  echo $v++?></div>
                        	<div class="text2"><a href="<?php echo base_url("profile");?>/<?php echo $leader->username?>">
								<?php if (strpos($leader->picture, "http://") === 0) :?>
								<img src="<?php echo $leader->picture; ?>" width="65" height="65"alt="" />
								<?php elseif (isset($leader->picture)) : ?>
								<img src="resource/user/profile/<?php echo $leader->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
								<?php endif; ?>	 </a></div>
                            <div class="text3"><?php echo $leader->firstname?> <?php echo $leader->lastname?></div>
                            <div class="text4"><?php echo $leader->count?></div>
                        </div>
 					  <?php endforeach; ?>
                    </div>