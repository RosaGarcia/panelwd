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
				<h1>Home</h1>
				<!--<p>
					<a href="<?php echo base_url()?>warriors/new">Nuevo Equipo</a>
				</p>-->
				<?php 
				echo form_open_multipart(null);
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
						    <header class="panel-heading">
						     	Info equipos			     	
						        <span class="tools pull-right">
						        	<a href="javascript:;"" class="fa fa-chevron-down"></a>
						        	<a href="javascript:;"" class="fa fa-cog"></a>
						        	<a href="javascript:;"" class="fa fa-times"></a>
						        </span>	
						    </header>
						    <div class="panel-body">
							    <table class="table table-hover general-table">	
							        <thead>
							        	<tr>
							        		<th>DynDNS</th>
							        		<th>Graficas</th>
							        		<th>Acciones</th>
							        	</tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td>Ola</td>
							        		<td>
							        		    <div class="col-md-3">
												    <div class="top-stats-panel">
												        <div class="gauge-canvas">
												            <h4 class="widget-h">CPU</h4>
												            <canvas width=160 height=100 id="gauge"></canvas>
												        </div>
												        <ul class="gauge-meta clearfix">
												            <li id="gauge-textfield" class="pull-left gauge-value"></li>
												            <li class="pull-right gauge-title">Safe</li>
												        </ul>
												    </div>
												</div>
							        		</td>
							        		<td>
							        		    <a href="<?php echo base_url()?>warriors/show" class="btn btn-round btn-primary">VER</a>	    	
							        		</td>
							        	</tr>
							        </tbody>
							    </table>
						    </div>			
						</section>
					</div>
				</div>
				<?php echo form_close();?>
			</body>
		</div>
	</div>
</section>			
</html>