<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <title>PHP HighCharts 2.0 - Chart library for PHP</title>
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jQuery.min.js"></script>
  <script type="text/javascript" src="js/MainApp.js"></script>
  <script type="text/javascript" src="js/HighCharts/highcharts.js"></script>
  <script type="text/javascript" src="js/HighCharts/exporting.js"></script>
</head>

<body>
	<!-- Left side content -->
	<div id="leftSide">
		<div class="logo">
            <a href="index.php"><img src="images/phplogo.png" alt="" /></a>
		</div>
		
		<div class="sidebarSep"></div>
		
		<!-- Left navigation -->
		<ul id="menu" class="nav">
			<li class="charts">
  			<a href="index.php" title="" class="active">
  			  <span>Live Demo</span>
  		  </a>
		  </li>
		</ul>
	</div>


	<!-- Right side -->
	<div id="rightSide">

		<!-- Top fixed navigation -->
		<div class="topNav">

				<div class="userNav">
					<ul>
						<li class="dd">
  						<a title=""> 
    						<img src="images/icons/iconHome.gif" alt="" />
    						<span>User Menu</span>
  						</a>
							<ul class="userDropdown">
								<li><a href="#" title="" class="sAdd">new message</a></li>
							</ul>
						</li>
						<li>
						  <span class="lastVersion">Latest Version: </span>
						  <span class="numberTop">2.0a</span>
						</li>
					</ul>
				</div>
				<div class="clear"></div>

		</div>

		<!-- Title area -->
		<div class="titleArea">
			<div class="line"></div>
			<div class="wrapper">
				<div class="pageTitle">
					<h5>Charts and graphs</h5>
					<span>PHP HighCharts Demo</span>
				</div>
				<!-- <div class="middleNav"><ul>
						 <li class="item"><span class"imageIcon"></span></li>
				     </ul></div> -->
				<div class="clear"></div>
			</div>
		</div>

		<div class="line"></div>


		<!-- Main content wrapper -->
		<div class="wrapper">

			<!-- Lines chart -->
			<div class="widget chartWrapper">
				<div class="title">
					<img src="images/icons/dark/graph.png" alt="" class="titleIcon" />
					<h6>Lines chart</h6>
				</div>
				<div class="body">
					<div class="chart2" id="lineChartDiv"></div>
				</div>
			</div>

			<!-- Bars chart -->
			<div class="widget chartWrapper">
				<div class="title">
					<img src="images/icons/dark/stats.png" alt="" class="titleIcon" />
					<h6>Vertical bars</h6>
				</div>
				<div class="body">
					<div class="bars" id="bartChartDiv"></div>
				</div>
			</div>

			<div class="widget chartWrapper"></div>


			<div class="widgets">

				<!-- Donut -->
				<div class="oneThree">
					<div class="widget">
						<div class="title">
							<img src="images/icons/dark/stats.png" alt="" class="titleIcon">
							<h6>Donut chart</h6>
						</div>
						<div class="body">
							<div class="pie" id="donutChartDiv"
								style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative;">
								<canvas class="base" width="267" height="250"></canvas>
								<canvas class="overlay" width="267" height="250" style="position: absolute; left: 0px; top: 0px; "></canvas>
								<div class="legend">
									<div
										style="position: absolute; width: 78px; height: 80px; top: 10px; right: 5px; background-color: rgb(239, 239, 239); opacity: 1;">
									</div>
									<table
										style="position: absolute; top: 10px; right: 5px;; font-size: 11px; color: #545454">
										<tbody>
											<tr>
												<td class="legendColorBox"><div style="">
														<div
															style="width: 15px; height: 0; border: 3px solid rgb(172, 209, 99); overflow: hidden"></div>
													</div></td>
												<td class="legendLabel"><span>Series1</span></td>
											</tr>
											<tr>
												<td class="legendColorBox"><div style="">
														<div
															style="width: 15px; height: 0; border: 3px solid rgb(209, 138, 99); overflow: hidden"></div>
													</div></td>
												<td class="legendLabel"><span>Series2</span></td>
											</tr>
											<tr>
												<td class="legendColorBox"><div style="">
														<div
															style="width: 15px; height: 0; border: 3px solid rgb(75, 153, 203); overflow: hidden"></div>
													</div></td>
												<td class="legendLabel"><span>Series3</span></td>
											</tr>
											<tr>
												<td class="legendColorBox"><div style="">
														<div
															style="width: 15px; height: 0; border: 3px solid rgb(77, 167, 77); overflow: hidden"></div>
													</div></td>
												<td class="legendLabel"><span>Series4</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Spline chart -->
				<div class="twoOne">
					<div class="widget chartWrapper">
						<div class="title">
							<img src="images/icons/dark/stats.png" alt="" class="titleIcon">
							<h6>Spline chart</h6>
						</div>
						<div class="body">
							<div class="bars" id="splineChartDiv"></div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

			</div>
			<div class="widgets">
				<div class="clear"></div>
			</div>
		</div>

		<!-- Footer Text -->
		<div id="footer">
			<div class="wrapper">PHP HighCharts 2.0 - © 2012 Davis Desormeaux</div>
		</div>

	</div>

	<div class="clear"></div>

<?php 
require_once("lib/HighCharts.php");
require_once("Example.class.php");
$charts = new Charts();
?>
<script>
  $(function(){
    <?=$charts->getLineChart();?>
    <?=$charts->getBarChart();?>
    <?=$charts->getDonutChart();?>       
    <?=$charts->getSplineChart();?>        
  });
</script>

</body>
</html>