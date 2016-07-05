$(function() {
    $('.chart>span').easyPieChart({
    	animate: 100,
    	scaleLength: 10,
    	size: 120,
    	lineWidth: 5,
    	barColor: function(percent) {
		    var ctx = this.renderer.getCtx();
		    var canvas = this.renderer.getCanvas();
		    var gradient = ctx.createLinearGradient(0,0,canvas.width,0);
		        gradient.addColorStop(0, "#BE4337");
		        gradient.addColorStop(1, "#000");
		    return gradient;
		  }
    });
});
setInterval(function equipo1(){
	$.getJSON("http://192.168.1.1:8041/prueba.php?jsoncallback=?").done(function(datos){
        	console.log(datos);
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

	});
}, 5000);
