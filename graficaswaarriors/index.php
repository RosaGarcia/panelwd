<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<title>Graficas</title>
</head>
<body>
	<div id="equipo" class="col-md-12">
		<div class="chart">
			<span id="state"  data-percent="0">
				<span id="tamState" class="percent">0</span>
			</span>
			<div id="stateLabel" class="label">STATE</div>
		</div>
		<div class="chart">
			<span id="mbuf"  data-percent="0">
				<span id="tamMbuf" class="percent">0</span>
			</span>
			<div id="bufferLabel" class="label">BUFFER</div>
		</div>
		<div class="chart">
			<span id="memory"  data-percent="0">
				<span id="tamMemory" class="percent">0</span>
			</span>
			<div class="label">Uso de Memoria</div>
		</div>

		<div class="chart">
			<span id="cpu"  data-percent="0">
				<span id="tamCpu" class="percent">0</span>
			</span>
			<div id="cpuLabel" class="label">Uso del Cpu</div>
		</div>

		<div class="chart">
			<span id="swap"  data-percent="0">
				<span id="tamSwap" class="percent">0</span>
			</span>
			<div id="swapLabel" class="label">SWAP</div>
		</div>

		<div class="chart">
			<span id="disk"  data-percent="0">
				<span id="percent_used" class="percent">0</span>
			</span>
			<div id="diskLabel" class="label">Disco Duro</div>
		</div>

		<div class="chart">
			<span id="disk1"  data-percent="0">
				<span id="percent_used1" class="percent">0</span>
			</span>
			<div id="diskLabel1" class="label">Disco Duro</div>
		</div>
	</div>

	









	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
	<script src="peticion.js"></script>
</body>
</html>