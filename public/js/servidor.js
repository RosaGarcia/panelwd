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
				        gradient.addColorStop(0, "rgb(53, 222, 214)");
				        gradient.addColorStop(1, "#000");
				    return gradient;
				  }
		    });
		});