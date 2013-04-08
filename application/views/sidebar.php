        <div class="innerpage_sidebar">
        	<div class="btn_holder"><a href="<?php echo base_url("users/teleworker/lookup");?>/<?php echo $this->uri->segment(4,$this->session->userdata('account_id'));?>"><img src="resource/images/telework-statistics.png" alt="" /></a></div>

            <div class="btn_holder"><a href="<?php echo base_url("users/following/lookup");?>/<?php echo $this->uri->segment(4,$this->session->userdata('account_id'));?>"><img src="resource/images/following.png" alt="" /></a></div>
            <div class="btn_holder"><a href="<?php echo base_url("users/follower/lookup");?>/<?php echo $this->uri->segment(4,$this->session->userdata('account_id'));?>"><img src="resource/images/followers.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"></a></div>
        </div>
        