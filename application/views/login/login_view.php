<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
	<style>
		body{
			/*background: url('http://www.fg-a.com/wallpapers/geo-shapes-black-1280.jpg')center center fixed no-repeat;*/
			background-size: cover;
			opacity: 0.5;
		}
		.container-fluid{
			margin-top: 25vh;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-4 col-xs-offset-4 text-center">
			<h1 class=" text-primary">login</h1>
			<?php echo validation_errors(); ?>
			<?php echo form_open('Verifylogin'); ?>
			<div class="form-group">
				<label class="text-primary" for="username">Username:</label>
				<input class="form-control" type="text" size="20" id="username" name="username"/>
			</div>
			<div class="form-group">
				<label class="text-primary" for="password">Password:</label>
				<input class="form-control" type="password" size="20" id="passowrd" name="password"/>
			</div>
			<br/>
			<input type="submit" value="Login"/>
			<?php 
				if ( $this->session->flashdata('ControllerMessage') != '' ) 
				{
			?>
					<h3><p class="red"><?php echo $this->session->flashdata('ControllerMessage'); ?></p></h3>
			<?php 
				} 
			?>
		</form>
	</div>
</div>
</div>

</body>
</html>