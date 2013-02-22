HighCharts.PHP
==============
Compile and Generate HighCharts.js Charts

## Example

```php
<?php
include('HighCharts.php');

function createSplineChart() {
    $data = array('data' => array(
      array(0, 15),     array(10, -50),
      array(20, -56.5), array(30, -46.5),
      array(40, -22.1), array(50, -2.5),
      array(60, -27.7), array(70, -55.7),
      array(80, -76.5)
    ));
    
    $splineChart = new HighCharts('splineChartDemo');    
    $splineChart->setTitle('text', 'Atmosphere Temperature by Altitude');
    
    $splineChart->setChart('width', 500);
    $splineChart->setChart('type', 'spline');
    $splineChart->setChart('inverted', true);
    $splineChart->setChart('renderTo', 'splineChartDiv');
    $splineChart->setChart('style', array('margin' => '0 auto'));
    
    $splineChart->setxAxis('reversed', false);
    $splineChart->setxAxis('maxPadding', 0.05);
    $splineChart->setxAxis('showLastLabel',true);
    $splineChart->setxAxis('title', array('enabled' => true, 'text' => 'Altitude'));
    $splineChart->setxAxis('labels', array('formatter' => 'function() {return  this.value +"km";}'));
    $splineChart->setyAxis('lineWidth', 2);
    $splineChart->setyAxis('title', array('text' => 'Temperature'));   
    $splineChart->setyAxis('labels', array('formatter' => 'function() {return this.value + "°";}'));
    
    $splineChart->setPlotOptions('spline', array('marker' => array('enable' => false)) );
    $splineChart->addSerie('Temperature', $data);
    
    return $splineChart->getJsChart();
}
?>

<html>
  <head>
    <script type="text/javascript" src="js/jQuery.min.js"></script>
    <script type="text/javascript" src="js/HighCharts/highcharts.js"></script>
    <script type="text/javascript" src="js/HighCharts/exporting.js"></script>
  <head>
  <body>
    <div id="splineChartDiv"></div>
    <script>
      $(function(){       
        <?=createSplineChart()?>        
      });
    </script>
  </body>
</html>
```php

## Screenshot

![alt text](http://phpchart.6te.net/images/screenshot.jpg "HighCharts.php Screenshot")

## Demo

[HighCharts.PHP Demo](http://phpchart.6te.net/ "HighCharts.PHP Demo")
