<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript">
	window.onload = function () {

      var dps = [{x: 1, y: 10}, {x: 2, y: 13}, {x: 3, y: 18}, {x: 4, y: 20}, {x: 5, y: 17},{x: 6, y: 10}, {x: 7, y: 13}, {x: 8, y: 18}, {x: 9, y: 20}, {x: 10, y: 17}];   //dataPoints. 

      var chart = new CanvasJS.Chart("chartContainer",{
      	title :{
      		text: "Live Data"
      	},
      	axisX: {						
      		title: "Axis X Title"
      	},
      	axisY: {						
      		title: "Units"
      	},
      	data: [{
      		type: "line",
      		dataPoints : dps
      	}]
      });

      chart.render();
      var xVal = dps.length + 1;
      var yVal = 15;	
      var updateInterval = 1000;

      var updateChart = function () {
      	
      	
      	yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
      	dps.push({x: xVal,y: yVal});
      	
      	xVal++;
      	if (dps.length >  10 )
      	{
      		dps.shift();				
      	}

      	chart.render();		

	// update chart after specified time. 

};

setInterval(function(){updateChart()}, updateInterval); 
}
</script>
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
</body>
</html>
