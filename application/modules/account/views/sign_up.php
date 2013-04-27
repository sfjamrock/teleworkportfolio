<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo lang('sign_up_page_name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<base href="<?php echo base_url(); ?>" />
<link type="text/css" rel="stylesheet" href="resource/css/style.css" />
</head>
<body>
<div id="main">
	<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    
    	<div class="other_content">
        	<div class="signin_holder">

            	<h1><?php echo anchor(current_url(), lang('sign_up_page_name')); ?><br /><br /><span><?php echo lang('sign_up_heading'); ?>
</span></h1>
            <?php echo form_open(uri_string().($this->input->get('continue')?'/?continue='.urlencode($this->input->get('continue')):'')); ?>
                <div class="signin_holder">

		   <div class="text1">   <?php echo form_label('Firstname'); ?></div> 
           <div class="text2">
                <?php echo form_input(array(
                        'name' => 'sign_up_firstname',
                        'id' => 'sign_up_firstname',
                        'value' => set_value('sign_up_firstname'),
                        'maxlength' => '24',
						'size' => '35'
                    )); ?>
                <?php echo form_error('sign_up_firstusername'); ?>
                <?php if (isset($sign_up_firstname_error)) : ?>
                <span class="field_error"><?php echo $sign_up_firstname_error; ?></span>
                <?php endif; ?>
            </div>

            <div class="text1">
                <?php echo form_label('Lastname'); ?>
            </div>
            <div class="text2">
                <?php echo form_input(array(
                        'name' => 'sign_up_lastname',
                        'id' => 'sign_up_lastname',
                        'value' => set_value('sign_up_lastname'),
                        'maxlength' => '24',
						'size' => '35'
                    )); ?>
                <?php echo form_error('sign_up_lastusername'); ?>
                <?php if (isset($sign_up_lastname_error)) : ?>
                <span class="field_error"><?php echo $sign_up_lastname_error; ?></span>
                <?php endif; ?>
            </div>


                	<div class="text1"><?php echo form_label(lang('sign_up_email'), 'sign_up_email'); ?>:</div>
                	<div class="text2"> <?php echo form_input(array(
                        'name' => 'sign_up_email',
                        'id' => 'sign_up_email',
                        'value' => set_value('sign_up_email'),
                        'maxlength' => '160',
						'size' => '35'
                    )); ?>
                <?php echo form_error('sign_up_email'); ?>
                <?php if (isset($sign_up_email_error)) : ?>
                <span class="field_error"><?php echo $sign_up_email_error; ?></span>
                <?php endif; ?>
                    </div>
                    <div class="text1"><?php echo form_label(lang('sign_up_password'), 'sign_up_password'); ?>:</div>
                	<div class="text2">  <?php echo form_password(array(
                        'name' => 'sign_up_password',
                        'id' => 'sign_up_password',
                        'value' => set_value('sign_up_password'),
						'size' => '35'
                    )); ?>
                <?php echo form_error('sign_up_password'); ?>
                    </div>
                    <div class="btn_holder"> 
                <?php echo form_button(array(
                        'type' => 'submit',
                        'class' => 'button',
                        'content' => lang('sign_up_create_my_account')
                    )); ?>
                     </div>
                    <div class="text1">&nbsp;</div>
                    <div class="text2">
                    <div class="checkbox_text"><p><?php echo lang('sign_up_already_have_account'); ?> <?php echo anchor('sign_in', lang('sign_up_sign_in_now')); ?></p</a></div>                        
                    </div>
                </div>
            </div>

            <?php echo form_close(); ?>
            <div class="social_icon">
            	<h1>Sign up with your account from:</h1>
                <div class="img_holder"><a href="<?php echo base_url("account/connect_facebook");?>"><img src="resource/images/facebook.png" alt="" /></a> <!--<a href="<?php echo base_url("account/connect_twitter");?>"><img src="resource/images/twitter.png" alt="" /></a> <a href="<?php echo base_url("account/connect_google");?>"><img src="resource/images/google.png" alt="" /></a> <a href="<?php echo base_url("account/connect_yahoo");?>"><img src="resource/images/yahoo.png" alt="" /></a> <a href="<?php echo base_url("account/connect_openid");?>"><img src="resource/images/openid.png" alt="" /></a>--> </div>
            </div>
        </div>
    </div>


         
<?php echo $this->load->view('footer'); ?>
</body>
</html>