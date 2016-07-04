<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Warriors</title>	
</head>

		<body>
			<a href="<?php echo base_url()?>warriors/index"><h1>Dashboard</h1></a>
			<?php 
			echo form_open_multipart(null);
			?>
               
                <div class="row">
				    <div class="col-md-2">
				        <section class="panel">
				            <div class="panel-body">
				                <div class="top-stats-panel">
				                    <div class="gauge-canvas">
				                        <h4 class="widget-h">State table size</h4>
				                        <canvas width=160 height=100 id="gauge"></canvas>
				                    </div>
				                    <ul class="gauge-meta clearfix">
				                        <li id="gauge-textfield" class="pull-left gauge-value">1526</li>
				                        <li class="pull-right gauge-title">Safe</li>
				                    </ul>
				                </div>
				            </div>
				        </section>
				    </div>
				    <div class="col-md-2">
				        <section class="panel">
				            <div class="panel-body">
				                <div class="top-stats-panel">
				                    <div class="daily-visit">
				                        <h4 class="widget-h">Daily Visitors</h4>
				                        <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">

				                        </div>
				                        <ul class="chart-meta clearfix">
				                            <li class="pull-left visit-chart-value">3233</li>
				                            <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
				                        </ul>
				                    </div>
				                </div>
				            </div>
				        </section>
				    </div>
				</div>

				<div class="row">
					<!--<div class="col-md-12"></div>-->
				    <div class="col-md-6">
				    	<div class="panel">
				    		<div class="panel-body">
				    			<div class="top-stats-panel">
				    				<div class="gauge-canvas">	
									    <header class="panel-heading"> 
									     <h3>System Information</h3>
									    </header><br />
									    <div class="col-md-2">					
											<p>DynDNS</p>
										</div><br /><br /><br /><br />
									    <div class="col-md-2">					
											<p>CPU Type</p>
										</div><br /><br /><br /><br />
										<div class="col-md-2">					
											<p>Uptime</p>
										</div><br /><br /><br /><br />
										<div class="col-md-2">
											<p>Current date/time</p>
										</div><br /><br /><br /><br />
										<div class="col-md-2">
											<p>DNS server(s)</p>
										</div><br /><br /><br />
										<br /><br /><br /><br />
										<div class="col-md-2">
											<p>Last config change</p>
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
				                    </div>
				            	</div>
				        	</div>
				    	</div>
					</div>			
				</div>

				
	    <?php echo form_close();?>			    
		</body>

</html>	