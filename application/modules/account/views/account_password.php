<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<title><?php echo lang('password_page_name'); ?></title>
<base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="resource/css/style.css" />
<link type="text/css" rel="stylesheet" href="resource/css/tabcontent.css" />
<script type="text/javascript" src="resource/js/tabcontent.js"></script>
</head>
<body>
<div id="main">
<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <div class="main_tabholder">
<?php echo $this->load->view('account/account_menu', array('current' => 'account_password')); ?>
            <div class="tab_content">
            <div id="country2" class="tabcontent"></div>
            <h2><?php echo anchor(current_url(), lang('password_page_name')); ?></h2>


            <?php echo form_open(uri_string()); ?>

            <?php if ($this->session->flashdata('password_info')) : ?>

<?php echo $this->session->flashdata('password_info'); ?>
            <div class="clear"></div>
            <?php endif; ?>
            <?php echo lang('password_safe_guard_your_account'); ?>

<div class="text1">	<?php echo form_label(lang('password_new_password'), 'password_new_password'); ?></div>

                <?php echo form_password(array(
                        'name' => 'password_new_password',
                        'id' => 'password_new_password',
                        'value' => set_value('password_new_password'),
						'class'=>'text2',	
                        'autocomplete' => 'off'
                    )); ?><br/>
                <?php echo form_error('password_new_password'); ?>

<div class="text1"><?php echo form_label(lang('password_retype_new_password'), 'password_retype_new_password'); ?></div>

                <?php echo form_password(array(
                        'name' => 'password_retype_new_password',						
						'class'=>'text2',	
                        'id' => 'password_retype_new_password',
                        'value' => set_value('password_retype_new_password'),
                        'autocomplete' => 'off'
                    )); ?><br/>
                <?php echo form_error('password_retype_new_password'); ?>

<div class="btn_holder">
                <?php echo form_input(array(
                        'type' => 'image',
						'style'=>'border:hidden',
						'src'=>'resource/images/change-pwd.png',
                    )); ?>
</div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>
<?php echo $this->load->view('footer'); ?>
</div>
<script type="text/javascript">
	var countries=new ddtabcontent("countrytabs")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
</script>
</body>
</html>