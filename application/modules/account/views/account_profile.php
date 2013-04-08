<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />

<title><?php echo lang('profile_page_name'); ?></title>
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
            <div id="country3" class="tabcontent"></div>
            <h2><?php echo anchor(current_url(), lang('profile_page_name')); ?></h2>

            <?php echo form_open_multipart(uri_string()); ?>

            <?php if (isset($profile_info)) : ?>

            <?php echo $profile_info; ?>

            <?php endif; ?>
            <p><?php echo lang('profile_instructions'); ?></p>
            <div class="text1">
                <?php echo form_label(lang('profile_username'), 'profile_username'); ?>
            </div>
            <div class="text2">
                <?php echo form_input(array(
                        'name' => 'profile_username',
                        'id' => 'profile_username',
                        'value' => set_value('profile_username') ? set_value('profile_username') : (isset($account->username) ? $account->username : ''),
                        'maxlength' => '24'
                    )); ?>
                <?php echo form_error('profile_username'); ?>
                <?php if (isset($profile_username_error)) : ?>
                <span class="field_error"><?php echo $profile_username_error; ?></span>
                <?php endif; ?>
            </div>

            <div class="text1">
                <?php echo form_label(lang('profile_picture'), 'profile_picture'); ?>
            </div>
            <div class="text2">
                <p>
					<?php if (empty($account->password) && isset($account_details->picture)) : ?>
 					<img src="<?php echo $account_details->picture; ?>" alt="" />
                    <?php elseif (isset($account_details->picture)) : ?>
                    <img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>" alt="" />
                    <?php echo anchor('account/account_profile/index/delete', lang('profile_delete_picture')); ?>
                    <?php else : ?>
                    <img src="resource/img/default-picture.gif" alt="" />
                    <?php endif; ?>
                </p>

                <?php echo form_upload(array(
                    'name' => 'account_picture_upload',
                    'id' => 'account_picture_upload'
                )); ?>
                <p><?php echo lang('profile_picture_guidelines'); ?></p>
                <?php if (isset($profile_picture_error)) : ?>
                <span class="field_error"><?php echo $profile_picture_error; ?></span>
                <?php endif; ?>
            </div>
            
			<div class="btn_holder" >
                <?php echo form_input(array(
                        'type' => 'image',
						'style'=>'border:hidden',
						'src'=>'resource/images/save.png',
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