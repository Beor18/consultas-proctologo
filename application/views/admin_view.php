<!DOCTYPE html>
	<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



	</head>
	<body>
		<div class="container-fluid">
			<div class="row col-md-12">
			    <nav class="navbar navbar-default navbar-static-top" style="padding:10px;">
                    <div class="container">
                        <ul class="nav nav-pills">
                          <li role="presentation" class="active"><a href="#">Inicio</a></li>
                          <li role="presentation"><?=anchor(base_url().'index.php/login/logout_ci', 'Cerrar sesión')?></li></li>
                        </ul>
                    </div>
				</nav>

			<div class="jumbotron">
			 <h2 style="text-align: center">Bienvenido <strong><?=$this->session->userdata('username')?></strong></h2>
			 <div class="row">
			 <p>
			      <!--<div class="col-md-2"></div>-->
                
			  </p>
			  <p>
			      <div class="col-md-6">
        			<div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align:center;"><strong>Consultas Registradas:</strong></h3>
                        </div>
                        <div class="panel-body">
                            <h1><center><strong><?php echo $this->db->count_all_results('buscar'); ?></strong></center></h1>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="text-align:center;"><strong>Un Título:</strong></h3>
                        </div>
                        <div class="panel-body">
                            <h1><center><strong><?php //echo $this->db->count_all_results('buscar'); ?> 0</strong></center></h1>
                        </div>
                    </div>
                </div>
                
			  </p>
			  
			  <p>
			      <div class="col-md-6">
			      	
			      	<div class="panel panel-default panel-primary">
					  <!-- Default panel contents -->
					  <div class="panel-heading">
					  	<h2>Últimas Consultas Registradas </h2>
					  </div>

					   	<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>ID</th>
						        <th>DNI</th>
						        <th>Nombre y Apellido</th>
						        <th>Fecha de Nacimiento</th>
						      </tr>
						    </thead>
			
			  <?php
			  	$consulta = $this->db->order_by("buscar_id","DESC");
			  	 $consulta = $this->db->get('buscar',6);

			  	  ?>


			  	<?php foreach ($consulta ->result() as $row)

					 { ?>


					  <!-- Table -->

					  
						    <tbody>

						      <tr>
						        <td><?php echo $row->buscar_id; ?></td>
						        <td><?php echo $row->dni; ?></td>
						        <td><?php echo $row->nombre; ?></td>
						        <td><?php echo $row->nacimiento; ?></td>
						      </tr>

						    </tbody>
  						
			   



					<?php }

			  ?></table></div>

			      </div>
                
			  </p>
			  
			  </div>
			   
			  <p><center><a class="btn btn-primary btn-lg" href="http://consulta.proctologo-online.com/index.php/Exportar" role="button">Descargar Excel</a></center></p>
			  
			  

			  	
			</div>		
			
			<div class="row col-md-12">
			    
    			
            
            </div>


			</div>
		</div>

	</body>
</html>