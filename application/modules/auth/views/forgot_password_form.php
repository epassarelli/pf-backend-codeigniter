<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'class' => 'form-control input-sm',	
	'placeholder' => 'Ingrese el correo',	
);

$submit = array(
        'name'  => 'reset',
        'type'  => 'submit',
        'value' => 'Enviar el nuevo password',
        'class' => 'btn btn-warning btn-block',
    );

if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email o usaurio';
} else {
	$login_label = 'Email';
}
?>
<div class="container">
<div class="row">	

  <div class="col-md-4 col-md-offset-4">
<?php echo form_open($this->uri->uri_string()); ?>

		<?php //echo form_label($login_label, $login['id']); ?>
		<?php //echo form_input($login); ?>
		<?php //echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>

	<?php //echo form_submit('reset', 'Enviar el nuevo password'); ?>

    <legend>Recuperar contrase&ntilde;a</legend>

  <div class="form-group">
    <?php echo form_input($login); ?>
    <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
  </div>

  <div class="form-group">
    <?php echo form_input($submit); ?>
  </div>


<?php echo form_close(); ?>
</div>
</div>
</div>