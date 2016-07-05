<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<h1><a href="<?php echo base_url()?>warriors/index">Dashboard</a>/Nuevo Equipo</h1>
				
	<?php 
		$atributos = array('id' => 'guardar','name' =>'Guardar');
		echo form_open(null,$atributos);
	?>

	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">				
				<div class="row">
					<section class="panel"><br />
						<div class="col-sm-2 col-md-2">
			                <p>DynDNS | IP</p>
			            </div>
			            <div class="col-sm-5 col-md-5">
			                <input class="form-control" type="text" name="dyn" required="true" value="<?php echo set_value("dyn") ?>"> 
						</div><br /><br /><br/>
						<div class="col-sm-2 col-md-2">
			                <p>Usuario</p>
			            </div>
			            <div class="col-sm-5 col-md-5">
			                <input class="form-control" type="text" name="usua" value="<?php echo set_value("usua") ?>"> 
						</div><br /><br /><br/>
						<div class="col-sm-2 col-md-2">
			                <p>Contraseña</p>
			            </div>
			            <div class="col-sm-5 col-md-5">
			                <input class="form-control" type="password" name="pass" value="<?php echo set_value("pass") ?>"> 
						</div><br /><br /><br/>
						<div class="col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3">
							<input class="btn btn-round btn-primary" type="submit" name="Guardar" value="Guardar" title="Guardar" id="guardar">
						</div>
				<?php echo form_close(); ?>
					</section>
				</div>	
			</div>	
		</div>	
	</section>
