<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
					<h1>Home</h1>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<section class="panel">
							    <header class="panel-heading">
							     	Info equipos
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
								       	<?php 
									    	foreach ($datos as $dato) 
									    	{
										    	?>  
												<tr>
													<td><a href=""><?php echo $dato->dyndns ?></a></td>
													<td><span id="cpu<?php echo $dato->id ?>"></span>
													</td>
													<td>
														<a href="<?php echo base_url() ?>warriors/show/<?php echo $dato->id ?>" class="btn btn-round btn-primary">VER</a>
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
			</div>
		</div>
	</section>

	<script type="text/javascript">
			/*var servidor = <?php echo json_encode($datos);?>;
			var ip = servidor[1]['dyndns'];
			alert("http://"+ip+"/prueba.php?jsoncallback");*/
		function peticion(){
			var servidor = <?php echo json_encode($datos);?>;
				for(var i = 0 ; i<=servidor.length; i ++){
					$.getJSON("http://"+servidor[i]['dyndns']+"/prueba.php?jsoncallback=?").done(function(datos,i){

					//$("#saludo").append("<p>" + datos.infoInterlan['ipaddr'] + "</p>");
					document.getElementById("cpu"+servidor[1]['id'] ).innerHTML = "<p>" + datos.cpu + "</p>";
					document.getElementById("mbuf").innerHTML = "<p>" + datos.mbuf + "</p>";
					})
				}
		}

		setInterval('peticion()',10000);

	</script>			


