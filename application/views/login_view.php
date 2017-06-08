<!DOCTYPE html>
	<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		
		 
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		 
		 <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #fefefe;
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		border: 8px solid #112233;		 		
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: #333333;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 100%;
		 	}
		 	input[type=submit]{
		 		padding: 6px 56px;
                background: #286090;
                color: #fff;
                margin: 2px 17%;
                border-radius: 10px;
                text-align: center;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 </style>
	</head>
	<body style="background-color:#0B4C5F;">
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div class="container" style="padding-top:9%;">
		<div class="col-md-12">
		    <div class="col-md-4"></div>
		
    		<div class="col-md-4">
    		<div class="panel panel-default panel-primary">
                <div class="panel-heading" style="margin:0 auto;">
                    <h2 style="text-align:center;">Ingreso al Sistema</h2>
                </div>
                  <div class="panel-body">
                    <?=form_open(base_url().'index.php/login/new_user')?>
                					<label for="username">Nombre de usuario:</label>
                					<?=form_input($username)?><p><?=form_error('username')?></p>
                					<label for="password">Contrase�0�9a:</label>
                					<?=form_password($password)?><p><?=form_error('password')?></p>
                					<?=form_hidden('token',$token)?>
                					<?=form_submit($submit)?>
                					<?=form_close()?>
                					<?php 
                					if($this->session->flashdata('usuario_incorrecto'))
                					{
                					?>
                					<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
                					<?php
                					}
                					?>
                  </div>
                  <p><center>Desarrollado por FlyByNet - 2017</center></p>
            </div>
        
            <div class="col-md-4"></div>
        </div>
        </div>
	</div>
	</body>
</html>