<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	
	<div class="wk-progress pf-status">
		<dir class="col-md-12">
			<h1><a href="<?php echo base_url()?>warriors/index">Dashboard</a>/Editar Equipo</h1>
		</dir>
	</div>
				
	<?php 
		$atributos = array('id' => 'guardar','name' =>'Guardar');
		echo form_open(null,$atributos);
	?>

	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">				
				<div class="row">
					<section class="panel"><br />
						<div class="wk-progress pf-status">
							<div class="col-sm-2 col-md-2">
			                	<p>DynDNS | IP</p>
			            	</div>
			            	<div class="col-sm-5 col-md-5">
			                	<input class="form-control" type="text" name="dyn" required="true" value="<?php echo $datos->dyndns ?>">
			                	<?php echo form_error('dyn'); ?> 
							</div>
						</div>
						<div class="wk-progress pf-status">
							<div class="col-sm-2 col-md-2">
			                	<p>Usuario</p>
			            	</div>
			            	<div class="col-sm-5 col-md-5">
			                	<input class="form-control" type="text" name="usua" required="true" value="<?php echo $datos->usuario ?>">
			                	<?php echo form_error('usua'); ?> 
							</div>
						</div>
						<div class="wk-progress pf-status">
							<div class="col-sm-2 col-md-2">
			                	<p>Contraseña</p>
			            	</div>
			            	<div class="col-sm-5 col-md-5">
			                	<input class="form-control" type="password" required="true" name="pass" value="">
			                	<?php echo form_error('pass'); ?> 
							</div>
						</div>
						<div class="wk-progress pf-status">
							<div class="col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3">
								<input class="btn btn-round btn-primary" type="submit" name="Guardar" value="Guardar" title="Guardar" id="guardar">
							</div>
						</div>
				<?php echo form_close(); ?>
					</section>
				</div>	
			</div>	
		</div>	
	</section>
