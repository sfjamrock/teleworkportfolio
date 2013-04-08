<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
<meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
<meta name="author" content="Telework Portfolio" />
<title><?php echo lang('linked_page_name'); ?></title>
<base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="resource/resource/images/favicon.ico" />
<script type="text/javascript" src="resource/js/tabcontent.js"></script>
<link type="text/css" rel="stylesheet" href="resource/css/style.css" />
<link type="text/css" rel="stylesheet" href="resource/css/tabcontent.css" />
</head>
<div id="main">
<?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <div class="main_tabholder">
<?php echo $this->load->view('account/account_menu', array('current' => 'account_password')); ?>
            <div class="tab_content">
            <div id="country4" class="tabcontent"></div>
            <h2><?php echo anchor(current_url(), lang('linked_page_name')); ?></h2>

            <h3><?php echo lang('linked_currently_linked_accounts'); ?></h3>
            <?php if ($this->session->flashdata('linked_info')) : ?>
            <?php echo $this->session->flashdata('linked_info'); ?>
            <?php endif; ?>
            <?php if ($num_of_linked_accounts == 0) : ?>
            <p><?php echo lang('linked_no_linked_accounts'); ?></p>
            
            <?php else :?>
                <?php if ($facebook_links) : ?>
                    <?php foreach ($facebook_links as $facebook_link) : ?>
                      <img src="resource/images/facebook.png" alt="<?php echo lang('connect_facebook'); ?>" title="<?php echo lang('connect_facebook'); ?>" width="40" />
         

                <?php echo lang('connect_facebook'); ?><br />
                <?php echo anchor('http://facebook.com/profile.php?id='.$facebook_link->facebook_id, substr('http://facebook.com/profile.php?id='.$facebook_link->facebook_id, 0, 30).(strlen('http://facebook.com/profile.php?id='.$facebook_link->facebook_id) > 30 ? '...' : ''), array('target' => '_blank', 'title' => 'http://facebook.com/profile.php?id='.$facebook_link->facebook_id)); ?>

                        <?php if ($num_of_linked_accounts != 1) : ?>
                <?php echo form_open(uri_string()); ?>

                        <?php echo form_hidden('facebook_id', $facebook_link->facebook_id); ?>
                        <?php echo form_button(array(
                                'type' => 'submit',
                                'class' => 'button',
                                'content' => lang('linked_remove')
                            )); ?>

                <?php echo form_close(); ?>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if ($twitter_links) : ?>
                    <?php foreach ($twitter_links as $twitter_link) : ?>

                <img src="resource/images/twitter.png" alt="<?php echo lang('connect_twitter'); ?>" title="<?php echo lang('connect_twitter'); ?>" width="40" />

                <?php echo lang('connect_twitter'); ?><br />
                <?php echo anchor('http://twitter.com/'.$twitter_link->twitter->screen_name, substr('http://twitter.com/'.$twitter_link->twitter->screen_name, 0, 30).(strlen('http://twitter.com/'.$twitter_link->twitter->screen_name) > 30 ? '...' : ''), array('target' => '_blank', 'title' => 'http://twitter.com/'.$twitter_link->twitter->screen_name)); ?>

                        <?php if ($num_of_linked_accounts != 1) : ?>
                <?php echo form_open(uri_string()); ?>

                        <?php echo form_hidden('twitter_id', $twitter_link->twitter_id); ?>
                        <?php echo form_button(array(
                                'type' => 'submit',
                                'class' => 'button',
                                'content' => lang('linked_remove')
                            )); ?>

                <?php echo form_close(); ?>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if ($openid_links) : ?>
                    <?php foreach ($openid_links as $openid_link) : ?>

                <img src="resource/images/<?php echo $openid_link->provider; ?>.png" alt="<?php echo lang('connect_'.$openid_link->provider); ?>" width="40" />

                <?php echo lang('connect_'.$openid_link->provider); ?><br />
                <?php echo anchor($openid_link->openid, substr($openid_link->openid, 0, 30).(strlen($openid_link->openid) > 30 ? '...' : ''), array('target' => '_blank', 'title' => $openid_link->openid)); ?>

                <?php if ($num_of_linked_accounts != 1) : ?>
                <?php echo form_open(uri_string()); ?>

                        <?php echo form_hidden('openid', $openid_link->openid); ?>
                        <?php echo form_button(array(
                                'type' => 'submit',
                                'class' => 'button',
                                'content' => lang('linked_remove')
                            )); ?>

                <?php echo form_close(); ?>
                        <?php endif; ?>
 
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>

            <h3><?php echo lang('linked_link_with_your_account_from'); ?></h3>
            <?php if ($this->session->flashdata('linked_error')) : ?>
            <?php echo $this->session->flashdata('linked_error'); ?>
            <?php endif; ?>
            <ul>
                <?php foreach($this->config->item('third_party_auth_providers') as $provider) : ?>
                <li class="third_party <?php echo $provider; ?>"><?php echo anchor('account/connect_'.$provider, lang('connect_'.$provider), 
                    array('title'=>sprintf(lang('connect_with_x'), lang('connect_'.$provider)))); ?></li>
                <?php endforeach; ?>
            </ul>

    </div>
</div></div>
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