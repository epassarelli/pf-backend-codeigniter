<?php
if ($use_username) {

$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'class' => 'form-control input-sm',
		'placeholder' => 'Nick / Usuario',
	);
}

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'class' => 'form-control input-sm',
	'placeholder' => 'Correo',
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class' => 'form-control input-sm',
	'placeholder' => 'Password',
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class' => 'form-control input-sm',
	'placeholder' => 'Reingrese el Password',
);

$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class' => 'form-control input-sm',
	'placeholder' => 'Ingrese el codigo de seguridad',
);
    
$submit = array(
        'name'  => 'register',
        'type'  => 'submit',
        'value' => 'Registrarse',
        'class' => 'btn btn-warning btn-block',
    );

?>

<div class="container">
<div class="row">	

  <div class="col-md-4 col-md-offset-4">
<?php echo form_open($this->uri->uri_string()); ?>

    <legend>Formulario de registracion</legend>

	<?php if ($use_username) { ?>

  <div class="form-group">
    <?php //echo form_label('Usuario', $username['id']); ?>
	<?php echo form_input($username); ?>
	<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
  </div>
				
	<?php } ?>

  <div class="form-group">
		<?php //echo form_label('Email', $email['id']); ?>
		<?php echo form_input($email); ?>
		<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
  </div>

  <div class="form-group">
		<?php //echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?>
		<?php echo form_error($password['name']); ?>
  </div>

  <div class="form-group">
		<?php //echo form_label('Repetir Password', $confirm_password['id']); ?>
		<?php echo form_password($confirm_password); ?>
		<?php echo form_error($confirm_password['name']); ?>
  </div>
	
	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
		
			<div id="recaptcha_image"></div>		
		
			<a href="javascript:Recaptcha.reload()">Ver otro CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>			
		
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		<?php echo form_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>
	
	<?php } else { ?>			

  <div class="form-group">
			<p>Ingrese exactamente el codigo de la imagen:</p>
			<?php echo $captcha_html; ?>
  </div>		
	
  <div class="form-group">
		<?php //echo form_label('Codigo de seguridad', $captcha['id']); ?>
		<?php echo form_input($captcha); ?>
		<?php echo form_error($captcha['name']); ?>
  </div>	
	
	<?php }
	} ?>

  <div class="form-group">
    <?php echo form_input($submit); ?>
  </div>

<?php echo form_close(); ?>
</div>
</div>
</div>