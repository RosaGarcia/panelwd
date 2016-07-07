<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<h1><a href="<?php echo base_url()?>warriors/index">Dashboard</a>/<?php echo $datos->dyndns ?></h1>

	<?php 
		echo form_open_multipart(null);
	?>
               
    <div class="row" align="center">
		<div class="col-md-12">
			<section class="panel">
				<div class="panel-body">
				    <div id="equipo" class="col-xs-12">
						<div class="chart">
							<span id="state"  data-percent="0">
								<span id="tamState" class="percent percents">0</span>
							</span>
							<div id="stateLabel" class="labels label">STATE</div>
						</div>
						<div class="chart">
							<span id="mbuf"  data-percent="0">
								<span id="tamMbuf" class="percent percents">0</span>
							</span>
							<div id="bufferLabel" class="labels label">BUFFER</div>
						</div>
						<div class="chart">
							<span id="memory"  data-percent="0">
								<span id="tamMemory" class="percent percents">0</span>
							</span>
							<div class="labels label">Uso de Memoria</div>
						</div>
						<div class="chart">
							<span id="cpu"  data-percent="0">
								<span id="tamCpu" class="percent percents">0</span>
							</span>
							<div id="cpuLabel" class="labels label">Uso del Cpu</div>
						</div>
						<div class="chart">
							<span id="swap"  data-percent="0">
								<span id="tamSwap" class="percent percents">0</span>
							</span>
							<div id="swapLabel" class="labels label">SWAP</div>
						</div>
						<div class="chart">
							<span id="disk"  data-percent="0">
								<span id="percent_used" class="percent percents">0</span>
							</span>
							<div id="diskLabel" class="labels label">Disco Duro</div>
						</div>
						<div class="chart">
							<span id="disk1"  data-percent="0">
								<span id="percent_used1" class="percent percents">0</span>
							</span>
							<div id="diskLabel1" class="labels label">Disco Duro</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<div class="panel-body">
				    <div class="top-stats-panel">
				    	<div class="gauge-canvas">	
							<header class="panel-heading"> 
								<h3>System Information</h3>
							</header><br />
							<div class="wk-progress pf-status">
								<div class="col-md-3">					
									<p>CPU Type</p>
								</div>
								<div class="col-md-5">					
									<p id="cpuType"></p>
								</div>
							</div>
							<div class="wk-progress pf-status">
								<div class="col-md-3">					
									<p>Uptime</p>
								</div>
								<div class="col-md-5">					
									<p id="uptime"></p>
								</div>
							</div>
							<div class="wk-progress pf-status">
								<div class="col-md-3">					
									<p>Current date/time</p>
								</div>
								<div class="col-md-5">					
									<p id="current"></p>
								</div>
							</div>
							<div class="wk-progress pf-status">
								<div class="col-md-3">
									<p>DNS server(s)</p>
								</div>
								<div class="col-md-5">					
									<lu id="dns"></lu>
								</div>
							</div>
							<div class="wk-progress pf-status">
								<div class="col-md-3">
									<p>Last config change</p>
								</div>
								<div class="col-md-5">					
									<p id="config"></p>
								</div>
							</div>
				        </div>
				    </div>
				</div>
			</div>
		</div>		

		<div class="col-md-6">
			<div class="panel">
				<div class="panel-body">
					<div class="top-stats-panel">
				   	 	<div class="gauge-canvas">	
							<header class="panel-heading"> 
								<h3>Interfaces</h3>
							</header><br />
							<div class="wk-progress pf-status">
								<div class="col-md-3">					
									<p id="interfasWan"></p>
								</div>
								<div class="col-md-1" id="infoStatusWan">
								</div>
								<div class="col-md-3">
									<p id="infoMediaWan"></p>
								</div>
								<div class="col-md-2">
									<p id="infoipWan"></p>
								</div>
							</div>
							<div class="wk-progress pf-status">
								<div class="col-md-3">					
									<p id="interfasLan"></p>
								</div>
								<div class="col-md-1" id="infoStatusLan">
								</div>
								<div class="col-md-3">
									<p id="infoMediaLan"></p>
								</div>
								<div class="col-md-2">
									<p id="infoipLan"></p>
								</div>
							</div>  								    						
				    	</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo base_url()?>public/js/servidor.js"></script>
	<script type="text/javascript">

	var servidor = <?php echo json_encode($datos);?>;

		setTimeout('webServer()',5000);

		setInterval(function peticion(){

				$.getJSON("http://"+servidor['dyndns']+"/prueba.php?jsoncallback=?").done(function(datos){
			        	$('#cpu').data('easyPieChart').update(datos.cpu);
			        	$('#tamCpu').html(datos.cpu)
			        	$('#state').data('easyPieChart').update(datos.state);
			        	$('#tamState').html(datos.state)
			        	$('#stateLabel').html("State \n"+datos.tamState)
			        	$('#mbuf').data('easyPieChart').update(datos.mbuf);
			        	$('#tamMbuf').html(datos.mbuf)
			        	$('#bufferLabel').html("MBUF\n"+datos.tamMbuf)
			        	$('#memory').data('easyPieChart').update(datos.memory);
			        	$('#tamMemory').html(datos.memory)
			        	$('#swap').data('easyPieChart').update(datos.swap);
			        	$('#tamSwap').html(datos.swap)
			        	$('#swapLabel').html("Uso de Swap\n"+datos.tamSwap)
			        	$('#disk').data('easyPieChart').update(datos.disk[0].percent_used);
			        	$('#percent_used').html(datos.disk[0].percent_used)
			        	$('#diskLabel').html("  Disco("+datos.disk[0].mountpoint+") ("+datos.disk[0].total_size+"-"+datos.disk[0].type+")")
			        	$('#disk1').data('easyPieChart').update(datos.disk[1].percent_used);
			        	$('#percent_used1').html(datos.disk[1].percent_used)
			        	$('#diskLabel1').html(" Disco("+datos.disk[1].mountpoint+")  ("+datos.disk[1].total_size+"-"+datos.disk[1].type+")")
			        	$('#cpuType').html(datos.cpuType)
			        	$('#uptime').html(datos.uptime)
			        	$('#current').html(datos.current)
			        	$('#config').html(datos.config)

				});
		}, 5000);

		function webServer()
		{
			$.getJSON("http://"+servidor['dyndns']+"/prueba.php?jsoncallback=?").done(function(datos){
			       for (var i = 0; i < datos.dns.length; i ++)
			       	{
			       		$('#dns').append("<li>"+datos.dns[i]+"</li>");
			   		}

			   		$('#interfasWan').html(datos.interfaces['wan'])
			   		var statusWan = datos.infoInterwan['status'];
			   		if (statusWan == "up")
			   		{
			   			$('#infoStatusWan').html('<i class="fa fa-arrow-up text-success"></i>')
			   		}
			   		else if(statusWan == "no carrier" )
			   		{
			   			$('#infoStatusWan').html('<i class="fa fa-times-circle text-danger"></i>')
			   		}
			   		else
			   		{
			   			$('#infoStatusWan').html('<i class="fa fa-arrow-down text-danger"></i>')	
			   		}
			   		$('#infoMediaWan').html(datos.infoInterwan['media'])
			   		$('#infoipWan').html(datos.infoInterwan['ipaddr'])

			   		$('#interfasLan').html(datos.interfaces['lan'])
			   		var statusLan = datos.infoInterlan['status'];
			   		if (statusLan == "up")
			   		{
			   			$('#infoStatusLan').html('<i class="fa fa-arrow-up text-success"></i>')
			   		}
			   		else if(statusLan == "no carrier" )
			   		{
			   			$('#infoStatusLan').html('<i class="fa fa-times-circle text-danger"></i>')
			   		}
			   		else
			   		{
			   			$('#infoStatusLan').html('<i class="fa fa-arrow-down text-danger"></i>')	
			   		}
			   		$('#infoMediaLan').html(datos.infoInterlan['media'])
			   		$('#infoipLan').html(datos.infoInterlan['ipaddr'])
				});

		}
	</script>