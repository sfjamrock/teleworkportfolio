<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<title><?php echo lang('connect_create_account'); ?></title>
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
            <h2><?php echo anchor(current_url(), lang('connect_create_account')); ?></h2>

            <?php echo form_open(uri_string()); ?>

            <h3><?php echo lang('connect_create_heading'); ?></h3>
            <?php if (isset($connect_create_error)) : ?>
			<?php echo $connect_create_error; ?>
            <?php endif; ?>
            <div class="text1">
                <?php echo form_label(lang('connect_create_username'), 'connect_create_username'); ?>
            </div>
                <?php echo form_input(array(
                        'name' => 'connect_create_username',
						'class'=>'text2',
                        'id' => 'connect_create_username',
                        'value' => set_value('connect_create_username') ? set_value('connect_create_username') : (isset($connect_create[0]['username']) ? $connect_create[0]['username'] : ''),
                        'maxlength' => '16'
                    )); ?>
                <?php echo form_error('connect_create_username'); ?>
                <?php if (isset($connect_create_username_error)) : ?>
                <span ><?php echo $connect_create_username_error; ?></span>
                <?php endif; ?>
            <div class="text1">
                <?php echo form_label(lang('connect_create_email'), 'connect_create_email'); ?>
            </div>

                <?php echo form_input(array(
                        'name' => 'connect_create_email',
						'class'=>'text2',
                        'id' => 'connect_create_email',
                        'value' => set_value('connect_create_email') ? set_value('connect_create_email') : (isset($connect_create[0]['email']) ? $connect_create[0]['email'] : ''),
                        'maxlength' => '160'
                    )); ?>
                <?php echo form_error('connect_create_email'); ?>
                <?php if (isset($connect_create_email_error)) : ?>
                <span ><?php echo $connect_create_email_error; ?></span>
                <?php endif; ?>

            <div class="clear"></div>
            <div >
                <?php echo form_button(array(
                        'type' => 'submit',
                        'class' => 'button',
                        'content' => lang('connect_create_button')
                    )); ?>
            </div>
            <div class="clear"></div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>
<?php echo $this->load->view('footer'); ?></div>
</body>
</html>