<?php $this->load->view('auth/auth_header');?>
<h2><?php echo lang('reset_password_heading');?></h2>

<div id="infoMessage"><?php echo $message;?></div>

<?php 
$attributes = array('class' => 'form-signin', 'id' => 'myform');
echo form_open('auth/reset_password/' . $code,$attributes);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-lg btn-primary btn-block btn-signin"');?></p>

<?php echo form_close();?>