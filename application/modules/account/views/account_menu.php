<div class="shadetabs">
     <ul id="countrytabs">
         <li rel="country1" class="selected"><?php echo anchor('account/account_settings', lang('website_account')); ?></li>
                <?php if ($account->password) : ?>
          <li rel="country2"><?php echo anchor('account/account_password', lang('website_password')); ?></li>
                <?php endif; ?>
           <li rel="country3"><?php echo anchor('account/account_profile', lang('website_profile')); ?></li>
				<?php if ($this->config->item('third_party_auth_providers')) : ?>
		    <li rel="country4"><?php echo anchor('account/account_linked', lang('website_linked')); ?></li>
				<?php endif; ?>
				
      </ul>
</div>