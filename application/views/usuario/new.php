<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="panel">
	<div class="panel-body">
		<div class="top-stats-panel">
			<body>
				<h1><a href="<?php echo base_url()?>usuario/index">Dashboard</a>/Nuevo Usuario</h1>
				
				<?php 
				$atributos = array('id' => 'guardar','name' =>'Guardar');
				echo form_open(null,$atributos);
				?>
				<?/*php echo validation_errors(); */?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
						    <div class="col-sm-2 col-md-2">
                            <p>Nombre</p>
                            </div>
                            <div class="col-sm-5 col-md-5">
                            <input class="form-control" type="text" name="nom" required="true" value="<?php echo set_value("nom") ?>"> 
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
						    <input class="btn btn-round btn-primary" type="submit"" value="Guardar" title="Guardar">
						</section>
					</div>
				</div>
				<?php echo form_close(); ?>
			</body>
		</div>	
	</div>	
</section>				    
