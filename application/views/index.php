<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Temperatura en la oficina de soporte FCAGLP</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
      ${demo.css}
		</style>
    <script src="/monitoreo/scripts/moment.js"></script>
		<script type="text/javascript">
      $(function () {
          Highcharts.chart('container', {
              chart: {
                zoomType: 'xy'
              },
              title: {
                  text: 'Temperatura por minuto',
                  x: -20 //center
              },
              subtitle: {
                  text: 'Source: Temp.sensor',
                  x: -20
              },
              xAxis: {
                type: 'datetime'
              },
              yAxis: {
                  title: {
                      text: 'Temperatura (°C)'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  valueSuffix: '°C'
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'middle',
                  borderWidth: 0
              },
              series: [{
                  name: 'Temperatura ambiente soporte',
                  data: [
                <?
                  $muestras='';
                  foreach ($datos as $fila)
                    $muestras.="[moment('".$fila->tiempo."').valueOf(),".$fila->valor."],";
                  $muestras = substr($muestras, 0, -1);
                  echo $muestras;
                ?>
                  ]
              }]
          });
      });
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">

</div>

	</body>
</html>
