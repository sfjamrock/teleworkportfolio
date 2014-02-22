<!--	leaders function call
		internal dashboard 
		url: /telelworkportfolio/$user -->
                    <div class="" id="default" style="width:100%; height:100%; min-height:350; height: 100%"></div>
                    <div class="">
                    	<div class="table_header">
													
                        	<div class="inset-text text1"><h2 class="inset-text">Currently Working</h2></div>
                        	<div class="text2">Site Location</div>
						</kbd>
                        </div>
						<?php $v=1?>
						<?php foreach($leader as $leader): ?>
                        <div class="table_row table-bordered">
							<div class="text1">#<?php  echo $v++?></div>
							<div class="text2"><a href="<?php echo base_url("profile");?>/<?php echo $leader->username?>">
								<?php if (strpos($leader->picture, "http://") === 0) :?>

								<img src="<?php echo $leader->picture; ?>" width="100" alt="&nbsp;" />
								<?php elseif (isset($leader->picture)) : ?>
								<img src="resource/user/profile/<?php echo $leader->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
								<?php endif; ?>	 </a></div>
                            <div class="text3" style="padding-left:20px;"  ><?php echo $leader->firstname?> <?php echo $leader->lastname?></div>
                            <div class="text4"><?php echo $leader->count?></div>
                        </div>
 					  <?php endforeach; ?>
					  <p>&nbsp;</p>
					  <p>&nbsp;</p>
					  <hr />
                    </div>