<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


			
	<div class="wk-progress">
		<div class="col-sm-12 col-md-12">
			<h1><a href="<?php echo base_url()?>usuario/index">Usuarios</a>/Nuevo</h1>
		</div>
	</div>
				
	<?php 
		$atributos = array('id' => 'guardar','name' =>'Guardar');
		echo form_open(null,$atributos);
	?>

	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
							<div class="wk-progress pf-status">
						    	<div class="col-sm-2 col-md-2">
                            		<p>Nombre</p>
                            	</div>
                            	<div class="col-sm-5 col-md-5">
                            		<input class="form-control" type="text" name="nom" required="true" value="<?php echo set_value("nom") ?>">
                            		<?php echo form_error('nom'); ?>
						    	</div>
						    </div>
						    <div class="wk-progress pf-status">
							    <div class="col-sm-2 col-md-2">
	                            	<p>Usuario</p>
	                            </div>
	                            <div class="col-sm-5 col-md-5">
	                            	<input class="form-control" type="text" name="usua" required="true" value="<?php echo set_value("usua") ?>">
	                            	<?php echo form_error('usua'); ?> 
							    </div>
							</div>
							<div class="wk-progress pf-status">
							    <div class="col-sm-2 col-md-2">
	                            	<p>Contraseña</p>
	                            </div>
	                            <div class="col-sm-5 col-md-5">
	                            	<input class="form-control" type="password" name="pass" required="true" value="<?php echo set_value("pass") ?>">
	                            	<?php echo form_error('pass'); ?> 
							    </div>
						    </div>
						    <div class="wk-progress pf-status">
						    	<div class="col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3">
						    		<input class="btn btn-round btn-primary" type="submit"" value="Guardar" title="Guardar">
						    	</div>
						    </div>
						</section>
					</div>
				</div>
	<?php echo form_close(); ?>
			</div>	
		</div>	
	</section>				    
