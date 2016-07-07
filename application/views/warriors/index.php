<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

	<section class="panel">
		<div class="panel-body">
			<div class="top-stats-panel">
				<h1>Home</h1>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<section class="panel">
							<header class="panel-heading">
							     <h3>Información equipos</h3>
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
													<td><a href="<?php echo base_url()?>warriors/iframe/<?php echo $dato->id ?>"><?php echo $dato->dyndns ?></a></td>
													<td>
														<div id="equipo" class="col-xs-12">
															<div class="chart">
																<span id="state<?php echo $dato->id ?>"  data-percent="0">
																	<span id="tamState<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="stateLabel<?php echo $dato->id ?>" class="label">STATE</div>
															</div>
															<div class="chart">
																<span id="mbuf<?php echo $dato->id ?>"  data-percent="0">
																	<span id="tamMbuf<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="bufferLabel<?php echo $dato->id ?>" class="label">BUFFER</div>
															</div>
															<div class="chart">
																<span id="memory<?php echo $dato->id ?>"  data-percent="0">
																	<span id="tamMemory<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div class="label">Uso de Memoria</div>
															</div>

															<div class="chart">
																<span id="cpu<?php echo $dato->id ?>"  data-percent="0">
																	<span id="tamCpu<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="cpuLabel<?php echo $dato->id ?>" class="label">Uso del Cpu</div>
															</div>

															<div class="chart">
																<span id="swap<?php echo $dato->id ?>"  data-percent="0">
																	<span id="tamSwap<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="swapLabel<?php echo $dato->id ?>" class="label">SWAP</div>
															</div>

															<div class="chart">
																<span id="disk<?php echo $dato->id ?>"  data-percent="0">
																	<span id="percent_used<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="diskLabel<?php echo $dato->id ?>" class="label">Disco Duro</div>
															</div>

															<div class="chart">
																<span id="disk1<?php echo $dato->id ?>"  data-percent="0">
																	<span id="percent_used1<?php echo $dato->id ?>" class="percent">0</span>
																</span>
																<div id="diskLabel1<?php echo $dato->id ?>" class="label">Disco Duro</div>
															</div>
														</div>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo base_url()?>public/js/servidor.js"></script>
	<script type="text/javascript">
		
		var j;

		setInterval(function peticion(){
			var servidor = <?php echo json_encode($datos);?>;
			j = 0;
			for(var i = 0 ; i<=servidor.length; i ++){
				$.getJSON("http://"+ servidor[i]['dyndns'] +"/prueba.php?jsoncallback=?").done(function(datos){
			        	$('#cpu'+servidor[j]['id']).data('easyPieChart').update(datos.cpu);
			        	$('#tamCpu'+servidor[j]['id']).html(datos.cpu)
			        	$('#state'+servidor[j]['id']).data('easyPieChart').update(datos.state);
			        	$('#tamState'+servidor[j]['id']).html(datos.state)
			        	$('#stateLabel'+servidor[j]['id']).html("State \n"+datos.tamState)
			        	$('#mbuf'+servidor[j]['id']).data('easyPieChart').update(datos.mbuf);
			        	$('#tamMbuf'+servidor[j]['id']).html(datos.mbuf)
			        	$('#bufferLabel'+servidor[j]['id']).html("MBUF\n"+datos.tamMbuf)
			        	$('#memory'+servidor[j]['id']).data('easyPieChart').update(datos.memory);
			        	$('#tamMemory'+servidor[j]['id']).html(datos.memory)
			        	$('#swap'+servidor[j]['id']).data('easyPieChart').update(datos.swap);
			        	$('#tamSwap'+servidor[j]['id']).html(datos.swap)
			        	$('#swapLabel'+servidor[j]['id']).html("Uso de Swap\n"+datos.tamSwap)
			        	$('#disk'+servidor[j]['id']).data('easyPieChart').update(datos.disk[0].percent_used);
			        	$('#percent_used'+servidor[j]['id']).html(datos.disk[0].percent_used)
			        	$('#diskLabel'+servidor[j]['id']).html("  Disco("+datos.disk[0].mountpoint+") ("+datos.disk[0].total_size+"-"+datos.disk[0].type+")")
			        	$('#disk1'+servidor[j]['id']).data('easyPieChart').update(datos.disk[1].percent_used);
			        	$('#percent_used1'+servidor[j]['id']).html(datos.disk[1].percent_used)
			        	$('#diskLabel1'+servidor[j]['id']).html(" Disco("+datos.disk[1].mountpoint+")  ("+datos.disk[1].total_size+"-"+datos.disk[1].type+")")

				});
				j = i; 
				}
		}, 10000);
	</script>			


