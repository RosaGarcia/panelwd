<h1><a href="<?php echo base_url()?>warriors/index">Home</a></h1>

<iframe width="100%" height="800" frameborder="1" scrolling="yes" id="pf" src="http://<?php echo $datos->dyndns ?>/"> </iframe>

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
	var servidor = <?php echo json_encode($datos);?>;
	var password = <?php echo json_encode($pass); ?>;
	var receiver = document.getElementById('pf').contentWindow;
	setTimeout("sendUser()",2000); 

	function sendUser() {
			    	
		receiver.postMessage(servidor['usuario']+':'+password, 'http://'+servidor['dyndns'])
	}
			
</script>