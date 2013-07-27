<?php foreach($equipment_user as $row1) : ?>
<div class="equipment_list">
                    	<div class="member_details">
                        	<div class="member_img"><a href="<?php echo base_url("profile");?>/<?php echo $row1->username?>">
								<?php if (strpos($row1->picture, "http://") === 0) :?>
								<img src="<?php echo $row1->picture; ?>" width="65" height="65"alt="" />
								<?php elseif (isset($row1->picture)) : ?>
								<img src="resource/user/profile/<?php echo $row1->picture; ?>?t=<?php echo md5(time()); ?>"  width="65" height="65"alt="" /> 
								<?php else : ?>
								<img src="resource/img/default-picture.gif"  width="65" height="65"alt="" />
								<?php endif; ?>	 </a></div>
                            <div class="member_text"><strong><?php echo $row1->firstname?> <?php echo $row1->lastname?></strong></div>
                        </div>
                        <div class="list_title">Equipment List</div>

    <?php foreach($equipment as $row2) : ?>

    <?php if($row1->user_id==$row2->user_id) : ?>
    
<div class="text_holder">
                        	<ul>
                            	<li><strong>Date Issued</strong><br /><?php echo $row2->date ?></li>
                                <li><strong>Item</strong><br /><?php echo $row2->item?> </li>
                                <li><strong>Description</strong><br /><?php echo $row2->description?></li>
                                <li><strong>Manufacturer</strong><br /><?php echo $row2->manufacturer?></li>
                                <li><strong>Model</strong><br /><?php echo $row2->model?></li>
                                <li><strong>Model #</strong><br /><?php echo $row2->model_num?></li>
                                <li><strong>Condition</strong><br /><?php echo $row2->condition?></li>
                                <li><strong>Appraised</strong><br /><?php echo $row2->appraised?></li>
                                <li><strong>Value</strong><br /><?php echo $row2->value?></li>
                            </ul>

                        </div>
	    
    <?php else : ?>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
    <?php endforeach; ?>

