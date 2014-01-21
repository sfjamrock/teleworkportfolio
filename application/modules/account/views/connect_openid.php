<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo sprintf(lang('connect_with_x'), lang('connect_openid')); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="resource/css/960gs/960gs.css" />
<link type="text/css" rel="stylesheet" href="resource/css/style2.css" />
<link type="text/css" rel="stylesheet" href="resource/css/style7.css" />
</head>
<body>
<div id="main">
<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    	<div class="other_content">
        	<div class="signin_holder">
            <h2><?php echo anchor(current_url(), sprintf(lang('connect_with_x'), lang('connect_openid'))); ?></h2>

            <?php echo form_open(uri_string()); ?>

            <h3><?php echo sprintf(lang('connect_enter_your'), lang('connect_openid_url')); ?> 
                <small><?php echo anchor($this->config->item('openid_what_is_url'), lang('connect_start_what_is_openid'), array('target'=>'_blank')); ?></small></h3>
            <?php if (isset($connect_openid_error)) : ?>
			<?php echo $connect_openid_error; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('connect_openid_error')) : ?>
			<?php echo $this->session->flashdata('connect_openid_error'); ?>
            <?php endif; ?>

                <?php echo form_input(array(
                        'name' => 'connect_openid_url',
                        'id' => 'connect_openid_url',
                        'class' => 'openid',
                        'value' => set_value('connect_openid_url')
                    )); ?>
                <?php echo form_error('connect_openid_url'); ?>

            <div class="clear"></div><br/>
                <?php echo form_button(array(
                        'type' => 'submit',
                        'class' => 'button',
                        'content' => lang('connect_proceed')
                    )); ?>
 
            <div class="clear"></div>

            <?php echo form_close(); ?>
        </div>
 </div>
    </div>

<?php echo $this->load->view('footer'); ?>
</div>
</body>
</html>