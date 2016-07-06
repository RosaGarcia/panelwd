<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="panel">
	<div class="panel-body">
		<div class="top-stats-panel">
			<body>
				<h1>Dashboard</h1>				
				<?php 
				if ( $this->session->flashdata('ControllerMessage') != '' ) 
				    {
				?>
				<p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
				<?php 
				} 
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
						    <header class="panel-heading">
						     	<h4>Información Usuarios</h4>	
						    </header>
						    <div class="panel-body">
							    <table class="table table-hover general-table">
									<thead>
										<tr>
											<th>id</th>
											<th>Nombre</th>
											<th>Usuario</th>
											<th>Contraseña</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
									    <?php 
									    foreach ($datos as $dato) 
									    {
										    ?>  
											<tr>
												<td><?php echo $dato->id?></td>
												<td><?php echo $dato->nombre?></td>
												<td><?php echo $dato->usuario?></td>
												<td><?php echo $dato->contrasena?></td>
												<td>
													<a class="btn btn-round btn-info" href="<?php echo base_url() ?>usuario/edit/<?php echo $dato->id ?>">Editar</a> 
													<a class="btn btn-round btn-danger" href="<?php echo base_url() ?>usuario/delete/<?php echo $dato->id ?>">Eliminar</a>
												</td>
											</tr>			
										    <?php 
										}
										?>
									</tbody>
								</table>
						    </div>
						</section>
					</div>
				</div>
			</body>
		</div>
	</div>
</section>				