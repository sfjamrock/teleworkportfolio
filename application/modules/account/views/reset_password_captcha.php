<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo lang('reset_password_page_name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="resource/css/style.css" />
</head>
<body>
<div id="main">
<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    	<div class="other_content">
        	<div class="signin_holder">
            <?php echo form_open(uri_string().(empty($_SERVER['QUERY_STRING'])?'':'?'.$_SERVER['QUERY_STRING'])); ?>

                <h2><?php echo anchor(current_url(), lang('reset_password_page_name')); ?></h2>
                <p><?php echo lang('reset_password_captcha'); ?></p>

            <?php if (isset($recaptcha)) : ?>
            <div class="text1">
                <?php echo $recaptcha; ?>
            </div>
            <div class="clear"></div>
            <?php if (isset($reset_password_recaptcha_error)) : ?>
            <div class="text2">
                <span class="field_error"><?php echo $reset_password_recaptcha_error; ?></span>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
            <?php endif; ?>
<div class="btn_holder">
                <?php echo form_input(array(
                        'type' => 'image',
						'style'=>'border:hidden',
						'src'=>'resource/images/save.png',
                    )); ?>
</div>

            <?php echo form_close(); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php echo $this->load->view('footer'); ?>
</body>
</html>