<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Warriors</title>	
</head>
<section class="panel">
	<div class="panel-body">
		<div class="top-stats-panel">
			<body>
				<h1>Editar Usuario</h1>
				<p>
				    <a href="<?php echo base_url()?>usuario/index" class="btn btn-round btn-primary">Regresar</a>
				</p>
				<?php 
				$atributos = array('id' => 'guardar','name' =>'Guardar');
				echo form_open_multipart(null,$atributos);
				?>
				<?/*php echo validation_errors(); */?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
						    <div class="col-sm-2 col-md-2">
                            <p>Nombre</p>
                            </div>
                            <div class="col-sm-5 col-md-5">
                            <input class="form-control" type="text" name="nom" required="true" value="<?php echo $datos->nombre ?>"> 
						    </div><br /><br /><br/>
						    <div class="col-sm-2 col-md-2">
                            <p>Usuario</p>
                            </div>
                            <div class="col-sm-5 col-md-5">
                            <input class="form-control" type="text" name="usua" value="<?php echo $datos->usuario?>"> 
						    </div><br /><br /><br/>
						    <div class="col-sm-2 col-md-2">
                            <p>Contraseña</p>
                            </div>
                            <div class="col-sm-5 col-md-5">
                            <input class="form-control" type="password" name="pass" value="<?php echo $datos->contrasena ?>"> 
						    </div><br /><br /><br/>
						    <div class="col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3">
						    <input type="hidden" name="id" value="">
						    <input class="btn btn-round btn-primary" type="submit" value="submit" title="Guardar">
						    </div>
						</section>
					</div>
				</div>
				<?php echo form_close(); ?>
			</body>
		</div>	
	</div>	
</section>			