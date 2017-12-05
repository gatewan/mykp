<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
	<!-- Bower Package -->
<!-- ... -->
  <script type="text/javascript" src="<?=base_url()?>bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Bootstrap core CSS 
<!-- Custon OWN CSS -->
	<link href="<?=base_url()?>assets/css/login.css" rel="stylesheet">
	<script type="text/javascript" src="<?=base_url()?>assets/js/login.js"></script>
    <div class="container">
        <div class="card card-container">
		      <img id="profile-img" class="profile-img-card" src="<?=base_url()?>assets/avatar_2x.png" />
	<p id="profile-name" class="profile-name-card"></p>
	<!--IONAUTH-->
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