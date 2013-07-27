<div class="teleworker_container">
	<h1 class="heading">Request Enrollment</h1>
		<?php foreach($join as $join): ?>	
	<div class="teleworker_details">
		<div class="worker_img"><a href="<?php echo base_url("profile");?>/<?php echo $join->username?>">
					<?php if (strpos($join->picture, "http://") === 0) :?>
					<img src="<?php echo $join->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($join->picture)) : ?>
					<img src="resource/user/profile/<?php echo $join->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>	 </a></div>
		<div class="worker_text"><?php echo $join->firstname?> <?php echo $join->lastname?><br /><br /><?php echo $join->city?>, <?php echo $join->state?></div>
		<div class="worker_btn">
<form action="company/analytics/accept" method="post"><input type="hidden"  name="user"value="<?php echo $join->username?>"/> <input type="submit" id="accept" name="company"value="<?php echo $this->uri->segment(1)?>"    style="background-image: url(resource/images/accept.png); border: solid 0px #000000; width: 86px; height: 33px; font-size: 0.1px;" />
</form>

<form action="company/analytics/reject" method="post"><input type="hidden"  name="user"value="<?php echo $join->username?>"/> <input type="submit" id="accept" name="company"value="<?php echo $this->uri->segment(1)?>"    style="background-image: url(resource/images/reject.png); border: solid 0px #000000; width: 86px; height: 33px; font-size: 0.1px;" />
</form>

</div>
	</div>
            <?php endforeach; ?>
</div>
	
<div class="teleworker_container right">
	<h1 class="heading">Enrolled Employee</h1>
		<?php foreach($enroll as $enroll): ?>	
	<div class="teleworker_details">
		<div class="worker_img"><a href="<?php echo base_url("profile");?>/<?php echo $enroll->username?>">
					<?php if (strpos($enroll->picture, "http://") === 0) :?>
					<img src="<?php echo $enroll->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($enroll->picture)) : ?>
					<img src="resource/user/profile/<?php echo $enroll->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>	 </a></div>
		<div class="worker_text"><?php echo $enroll->firstname?> <?php echo $enroll->lastname?><br /><br /><?php echo $enroll->city?>, <?php echo $enroll->state?></div>
		<div class="worker_btn">
<form action="company/analytics/reject" method="post"><input type="hidden"  name="user"value="<?php echo $enroll->username?>"/> <input type="submit" id="accept" name="company"value="<?php echo $this->uri->segment(1)?>"    style="background-image: url(resource/images/reject.png); border: solid 0px #000000; width: 86px; height: 33px; font-size: 0.1px;" />
</form>
 </div>
	</div>
            <?php endforeach; ?>
</div>
	              
