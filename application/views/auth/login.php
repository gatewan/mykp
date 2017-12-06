<?php $this->load->view('auth/auth_header');?>
<div id="infoMessage"><?php echo $message;?></div>

<?php 
$attributes = array('class' => 'form-signin', 'id' => 'myform');
echo form_open("auth/login",$attributes);?>
<span id="reauth-email" class="reauth-email"></span>
  <p>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-primary btn-block btn-signin"');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
<!--IONAUTH END-->
</div>
</div>