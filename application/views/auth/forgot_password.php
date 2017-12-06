<?php $this->load->view('auth/auth_header');?>
<h2><?php echo lang('forgot_password_heading');?></h2>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php
$attributes = array('class' => 'form-signin', 'id' => 'myform');
 echo form_open("auth/forgot_password",$attributes);?>

      <p>
      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      	<?php echo form_input($identity);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-lg btn-primary btn-block btn-signin"');?></p>

<?php echo form_close();?>
