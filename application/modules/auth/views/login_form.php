<?php
    $login = array(
        'name'	=> 'login',
        'id'	=> 'login',
        'value' => set_value('login'),
        'maxlength'	=> 80,
        'size'	=> 30,
		'placeholder' => 'Email o usuario',
		'class' => 'form-control input-sm',
    );
    
    if (@$login_by_username AND $login_by_email) 
    {
        $login_label = 'Email o usuario';
        } 
        else if ( @$login_by_username) 
            {
                $login_label = 'Login';
            } 
            else 
                {
                $login_label = 'Email';
                }
    
    $password = array(
        'name'	=> 'password',
        'id'	=> 'password',
        'size'	=> 30,
		'placeholder' => 'Password',
		'class' => 'form-control input-sm',
    );
    
    $remember = array(
        'name'	=> 'remember',
        'id'	=> 'remember',
        'value'	=> 1,
        'checked'	=> set_value('remember'),
        'style' => 'margin:0;padding:0',
    );
    
    $captcha = array(
        'name'	=> 'captcha',
        'id'	=> 'captcha',
        'maxlength'	=> 8,
		'placeholder' => 'Codigo',
    );
    
    $submit = array(
        'name'  => 'submit',
        'type'  => 'submit',
        'value' => 'Entrar',
        'class' => 'btn btn-warning btn-block',
    );

    ?>

<div class="container">
<div class="row">	

  <div class="col-md-4 col-md-offset-4">

    <?php echo form_open($this->uri->uri_string()); ?>
    <legend>Formulario de ingreso</legend>

  <div class="form-group">
    <?php echo form_input($login); ?>
    <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
  </div>

  <div class="form-group">
    <?php echo form_password($password); ?>
    <?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
  </div>

    <?php echo form_checkbox($remember); ?>
    <?php echo form_label('Recordarme', $remember['id']); ?>
  
  <div class="form-group">
    <?php echo form_input($submit); ?>
  </div>


    <?php echo anchor('/auth/forgot_password/', '¿Password?'); ?>
    - <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Registrarme'); ?>

    <?php echo form_close(); ?>
</div>
</div>
</div>