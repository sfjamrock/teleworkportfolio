<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo lang('sign_in_page_name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<base href="<?php echo base_url(); ?>" />
<link type="text/css" rel="stylesheet" href="resource/css/style2.css" />
</head>
<body>
<div id="main">
	<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    
    	<div class="other_content">
        	<div class="signin_holder">
            	<h1><?php echo anchor(uri_string().($this->input->get('continue')?'/?continue='.urlencode($this->input->get('continue')):''), lang('sign_in_page_name')); ?><br /><span>Sign in with your Telework Portfolio Account</span></h1>
            <?php echo form_open(uri_string().($this->input->get('continue')?'/?continue='.urlencode($this->input->get('continue')):'')); ?>

                <div class="signin_holder">
 			<?php if (isset($sign_in_error)) : ?>
			<?php echo $sign_in_error; ?>
            <div class="clear"></div>
            <?php endif; ?>
                	<div class="text1">Email:</div>
                	<div class="text2">                <?php echo form_input(array(
                        'name' => 'sign_in_username_email',
                        'id' => 'sign_in_username_email',
                        'value' => set_value('sign_in_username_email'),
                        'maxlength' => '35',
						'size' => '35'
                    )); ?><br/>
                <?php echo form_error('sign_in_username_email'); ?>
                <?php if (isset($sign_in_username_email_error)) : ?>
                <span class="field_error"><?php echo $sign_in_username_email_error; ?></span>
                <?php endif; ?>
                    </div>
                    <div class="text1">Password:</div>
                	<div class="text2"> <?php echo form_password(array(
                        'name' => 'sign_in_password',
                        'id' => 'sign_in_password',
                        'value' => set_value('sign_in_password'),
						'size' => '35'
                    )); ?><br/>
                     <?php echo form_error('sign_in_password'); ?>
                    </div>
                    <div class="btn_holder"> 
                             <?php echo form_input(array(
                            'type' => 'image',
							'style'=>'border:hidden',
							'src'=>'resource/images/signin.png',
							'alt'=>'Submit'
                        )); ?>
                     </div>
                    <div class="text1">&nbsp;</div>
                    <div class="text2">
                    	<div class="checkbox"><input name="sign_in_remember" id="sign_in_remember" type="checkbox" value="checked"  checked=" $this->input->post('sign_in_remember')"/></div>
                        <div class="checkbox_text">Remember Me / <a href="<?php echo base_url("account/forgot_password");?>">Forget Your Password?</a></div>
                    	<div class="checkbox">&nbsp;</div>
                        <div class="checkbox_text">Don't have an account? <a href="<?php echo base_url("sign_up");?>">Sign up now</a></div>                        
                    </div>
                </div>
            </div>

            <?php echo form_close(); ?>
            <div class="social_icon">
            	<h1>Sign in with your account from:</h1>
                <div class="img_holder"><a href="<?php echo base_url("account/connect_facebook");?>"><img src="resource/images/facebook.png" alt="" /></a><!-- <a href="<?php echo base_url("account/connect_twitter");?>"><img src="resource/images/twitter.png" alt="" /></a> <a href="<?php echo base_url("account/connect_google");?>"><img src="resource/images/google.png" alt="" /></a> <a href="<?php echo base_url("account/connect_yahoo");?>"><img src="resource/images/yahoo.png" alt="" /></a> <a href="<?php echo base_url("account/connect_openid");?>"><img src="resource/images/openid.png" alt="" /></a> --></div>
            </div>
        </div>
    </div>
<?php echo $this->load->view('footer'); ?>
</div>


</body>
</html>