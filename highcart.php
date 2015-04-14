<?php 
	session_start(); 
	
	if(!isset($_SESSION['MM_Username']))
	{
		//echo $_SESSION['MM_Username'];
		echo "tidak masuk";
		//header("Location: ". "index.php");
		echo "<META HTTP-EQUIV='Refresh' Content='0; URL=index.php' >";
		die();
		//exit;
	}
	
	else 
	{
		
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" style="border-top-width: 10px; padding-top: 10px; padding-bottom: 10px;">
	<title>Visualisasi</title>
	<head>
		<!--Bootstrap-->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	
	<body style="background-color:#cccccc">
	
		<!--Java Script-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-1.11.1.js"></script>		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/highcharts.js"></script>
		<script src="js/modules/exporting.js"></script>
		
		
		
		<!-- Halaman 1-->
		
		<div class="auto">
			<div class="panel-primary" style="margin-top:-9px;">
				<div class="panel-heading">
				
					<form class="navbar navbar-right">
						<!-- Single button -->	
					</form>
					
					<h1 style="font-family:Calibri; color:white; margin:2px;"><strong>Informasi Penumpang Kereta Api Menurut Wilayah</strong>
						<a href="http://localhost:8080/binary/index.php">
						<button type="submit" id="submitxxx" class="btn btn-default navbar-right" style="margin-top:4px;">
							
							<span class="glyphicon glyphicon-off">&nbspLogOut</span>
						</button>
						</a>
				  </a></h1>
				</div>
			</div>
		</div>
		
		
					<!-- Isi body-->

            <div class="col-md-9">
                    <div class="panel-info" style="margin-left:-15px; margin-top:5px; margin-right:13px">
                        <div class="panel-heading">
                            <div class="row">
                              <h3><center>Persentase Per-Tahun</center></h3>
								<h4><center>Data Perjalanan Penumpang Kereta Api</center></h4>
								<div class="col-md-4">
									<div class="panel panel-heading panel panel-primary" id="container4"></div>
								</div>
								<div class="col-md-4">
									<div class="panel panel-heading panel panel-primary" id="container5">
								</div>
								</div>
							<div class="col-md-4">
                                <div class="panel panel-heading panel panel-primary" id="container6">
                            </div>
							</div>
                        </div>
                        <!--<a href="#">
                            <div class="btn btn-warning">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
								
                            </div>
                        </a>-->
                    </div>
                </div>
			</div>	

					<!-- Buka Detail Pada Bagian Samping Kanan-->
					<div>
					<div class="col-md-3">
						<div class="panel panel-danger" style="margin-left:-30px; margin-top:-10px; margin-right:-15px;">
							<div class="panel panel-heading">
							<div><center><strong>Rata-Rata Penumpang Pada 2013</strong></center></div>
							</div>
							<a href="#">
								<table class="table" data-toggle="modal" data-target="#2013" style="text-align:center;">
										<tr style="background-color:#">
											<td>Jabodetabek</td><td>Non-Jabodetabek</td><td>Sumatra</td>
										</tr>
										<td>73 %</td><td>25 %</td><td>2 %</td>
								</table>
							</a>
						</div>
						<br><br>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-success" style="margin-left:-30px; margin-top:-24px; margin-right:-15px;">
							<div class="panel panel-heading">
							<div><center><strong>Rata-Rata Penumpang Pada 2012</strong></center></div>
							</div>
							<a href="#">
								<table class="table" data-toggle="modal" data-target="#2012" style="text-align:center;">
										<tr style="background-color:#">
											<td>Jabodetabek</td><td>Non-Jabodetabek</td><td>Sumatra</td>
										</tr>
										<td>66 %</td><td>31 %</td><td>2 %</td>
								</table>
							</a>
						</div>
						<br><br>
					</div>
					
					<div class="col-md-3">
						<div class="panel panel-warning" style="margin-left:-30px; margin-top:-22px; margin-right:-15px;">
							<div class="panel panel-heading">
							<div><center><strong>Rata-Rata Penumpang Pada 2011</strong></center></div>
							</div>
							<a href="#">
								<table class="table" data-toggle="modal" data-target="#2011" style="text-align:center;">
										<tr style="background-color:#">
											<td>Jabodetabek</td><td>Non-Jabodetabek</td><td>Sumatra</td>
										</tr>
										<td>61 %</td><td>36 %</td><td>3 %</td>
								</table>
							</a>
						</div>
					</div>
					</div>
					<br/><br/><br/><br/><br/><br/><br/>
					<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					<div style="margin-left:570px; margin-top:0px;"><Strong>&copy Design by Kelompok 9 :: 2014</Strong></div>
						
					
				
					<!-- Tutup detail Pada Bagian Samping Kanan-->
					
					
		<!-- Button trigger modal -->

				<!-- Modal 1-->
				<div class="modal fade bs-example-modal-lg" id="2013" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" style="width:1100px;">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Tahun 2013</h4>
					  </div>
					  <div class="modal-body">
						<div class="panel panel-heading panel panel-primary" id="container1" style="min-width:1000px; min-height:300px;"></div>
						<br>
							<div style="min-width:900px;">
								<table border="1" class="table">
									<tr style="background-color:#2A9FD6">
									<td>Bulan</td><td>Januari</td><td>Februari</td><td>Maret</td><td>April</td><td>Mei</td><td>Juni</td><td>Juli</td><td>Agustus</td><td>September</td><td>Oktober</td>	
												</tr>
												<tr>
									<td>Jabodetabek</td><td>10089000</td><td>10281000</td><td>11240000</td><td>11529000</td><td>11767000</td><td>11817000</td><td>15407000</td><td>14321000</td><td>15113000</td><td>15531000</td>
												</tr>
												<tr>
									<td>Non-Jabodetabek</td><td>4484000</td><td>4034000</td><td>4281000</td><td>4195000</td><td>4028000</td><td>5115000</td><td>4510000</td><td>4710000</td><td>4326000</td><td>4667000</td>
												</tr>
												<tr>
									<td>Sumatra</td><td>327000</td><td>279000</td><td>305000</td><td>276000</td><td>318000</td><td>369000</td><td>328000</td><td>392000</td><td>299000</td><td>336000</td>
												</tr>
								</table>
							</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						
					  </div>
					</div>
				  </div>
				</div> <!-- Tutup Modal 1 -->
				
				<!-- Modal 2 -->
				<div class="modal fade bs-example-modal-lg" id="2012" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" style="width:1100px;">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Tahun 2012</h4>
					  </div>
					  <div class="modal-body">
						<div class="panel panel-heading panel panel-primary" id="container2" style="min-width:1000px; min-height:300px;"></div>
						<br>
							<br>
							<div style="min-width:900px;">
								<table border="1" class="table">
									<tr style="background-color:#2A9FD6">
									<td>Bulan</td><td>Januari</td><td>Februari</td><td>Maret</td><td>April</td><td>Mei</td><td>Juni</td><td>Juli</td><td>Agustus</td><td>September</td><td>Oktober</td>	
												</tr>
												<tr>
									<td>Jabodetabek</td><td>9779000</td><td>9840000</td><td>11285000</td><td>11271000</td><td>11872000</td><td>12034000</td><td>12391000</td><td>11471000</td><td>11556000</td><td>11501000</td>
												</tr>
												<tr>
									<td>Non-Jabodetabek</td><td>6022000</td><td>5286000</td><td>5416000</td><td>5105000</td><td>5519000</td><td>5653000</td><td>5565000</td><td>5204000</td><td>4507000</td><td>5327000</td>
												</tr>
												<tr>
									<td>Sumatra</td><td>482000</td><td>364000</td><td>389000</td><td>370000</td><td>370000</td><td>375000</td><td>353000</td><td>381000</td><td>305000</td><td>299000</td>
												</tr>
								</table>
							</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						
					  </div>
					</div>
				  </div>
				</div>  <!-- Tutup Modal 2 -->
				
				<!-- Modal 3-->
				<div class="modal fade bs-example-modal-lg3" id="2011" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" style="width:1100px;">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Tahun 2011</h4>
					  </div>
					  <div class="modal-body">
						<div class="panel panel-heading panel panel-primary" id="container3" style="min-width:1000px; min-height:300px;"></div>
						<br>
							<div style="min-width:900px;">
								<table border="1" class="table">
									<tr style="background-color:#2A9FD6">
									<td>Bulan</td><td>Januari</td><td>Februari</td><td>Maret</td><td>April</td><td>Mei</td><td>Juni</td><td>Juli</td><td>Agustus</td><td>September</td><td>Oktober</td>	
												</tr>
												<tr>
									<td>Jabodetabek</td><td>10354000</td><td>9270000</td><td>10733000</td><td>10188000</td><td>10513000</td><td>10147000</td><td>10749000</td><td>9678000</td><td>9652000</td><td>9777000</td>
												</tr>
												<tr>
									<td>Non-Jabodetabek</td><td>6092000</td><td>5249000</td><td>5851000</td><td>5843000</td><td>6505000</td><td>6659000</td><td>6883000</td><td>4814000</td><td>6661000</td><td>5910000</td>
												</tr>
												<tr>
									<td>Sumatra</td><td>445000</td><td>371000</td><td>394000</td><td>410000</td><td>504000</td><td>459000</td><td>500000</td><td>354000</td><td>568000</td><td>399000</td>
												</tr>
								</table>
							</div>	
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						
					  </div>
					</div>
				  </div>
				</div> <!-- Akhir Modal 3 -->
		
		
		<!--<div class="col-md-12">
				<a href="#" class="list-group-item active">ANGGOTA KELOMPOK 13</a>
				<a href="#" class="list-group-item">KHAMIM AHSANU AMALA(13410100058)</a>
				<a href="#" class="list-group-item">AHMAD MISBAHUDDIN ALHARITS(13410100064)</a>
				<a href="#" class="list-group-item">GALIH OKTA SIWI(13410100068)</a>
				
		</div>-->
		
			<!-- Masukkaan Data -->
		<script type="text/javascript">
		$(function () {
			$('#container1').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Tahun 2013'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
						'Jul', 'Ags', 'Sep', 'Okt']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: 'Jabodetabek',
					marker: {
						symbol: 'square'
					},
					data: [10.089, 10.281, 11.240, 11.529,11.767 ,11.817 ,15.407 , {
						y: 14.321,

					}, 15.113,15.531]

				}, {
					name: 'Non-Jabodetabek (Jawa)',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 4.484,
					}, 4.034, 4.281, 4.194, 4.028, 5.115, 4.510, 4.710, 4.326, 4.667]
				},
				{
					name: 'Sumatera',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 0.372,
					}, 0.279, 0.305, 0.276, 0.318, 0.369, 0.328, 0.392, 0.299, 0.336]
				}]
			});
		});
				</script>
								
				<script type="text/javascript">
		$(function () {
			$('#container2').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Tahun 2012'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
						'Jul', 'Ags', 'Sep', 'Okt']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: 'Jabodetabek',
					marker: {
						symbol: 'square'
					},
					data: [9.779, 9.840, 11.285, 11.271,11.872 ,12.034 ,12.391 , {
						y: 11.471,

					}, 11.556,11.501]

				}, {
					name: 'Non-Jabodetabek (Jawa)',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 6.022,
					}, 5.286, 5.416, 5.105, 5.519, 5.653, 5.565, 5.204, 4.507, 5.327]
				},
				{
					name: 'Sumatera',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 0.482,
					}, 0.364, 0.389, 0.370, 0.370, 0.375, 0.353, 0.381, 0.305, 0.299]
				}]
			});
		});
				</script>
				
				<script type="text/javascript">
		$(function () {
			$('#container3').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Tahun 2011'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
						'Jul', 'Ags', 'Sep', 'Okt']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: 'Jabodetabek',
					marker: {
						symbol: 'square'
						
					},
					data: [10.354, 9.270, 10.733, 10.188,10.513 ,10.147 ,10.749 , {
						y: 9.678,

					}, 9.652,9.777]

				}, {
					name: 'Non-Jabodetabek (Jawa)',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 6.092,
					}, 5.259, 5.851, 5.843, 6.505, 6.659, 6.883, 4.814, 6.661, 5.910]
				},
				{
					name: 'Sumatera',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 0.445,
					}, 0.371, 0.394, 0.410, 0.504, 0.459, 0.500, 0.354, 0.568, 0.399]
				}]
			});
		});
				</script>
				
				
		<!------------------------------------------ Data BUat Annual report  -------------------------------------------------->
				
				<script type="text/javascript" data-target="#2013">
		$(function () {
			$('#container4').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Jabodetabek'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: '2013',
					marker: {
						symbol: 'square'
						
					},
					data: [10.089, 10.281, 11.240]

				}, {
					name: '2012',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 9.779,
					}, 9.840, 11.285]
				},
				{
					name: '2011',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 10.354,
					}, 9.270, 10.733]
				}]
			});
		});
				</script>
				
				<script type="text/javascript">
		$(function () {
			$('#container5').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Non-Jabodetabek (Jawa)'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: '2013',
					marker: {
						symbol: 'square'
						
					},
					data: [4.484, 4.034, 4.281]

				}, {
					name: '2012',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 6.022,
					}, 5.286, 5.416]
				},
				{
					name: '2011',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 6.092,
					}, 5.249, 5.851]
				}]
			});
		});
				</script>
				
				<script type="text/javascript">
		$(function () {
			$('#container6').highcharts({
				chart: {
					type: 'spline'
				},
				title: {
					text: 'Sumatera'
				},
				subtitle: {
					text: 'Source: http://www.bps.go.id/'
				},
				xAxis: {
					categories: ['Jan', 'Feb', 'Mar']
				},
				yAxis: {
					title: {
						text: 'Juta Orang'
					},
					labels: {
						formatter: function () {
							return this.value +' ';
						}
					}
				},
				tooltip: {
					crosshairs: true,
					shared: true
				},
				plotOptions: {
					spline: {
						marker: {
							radius: 4,
							lineColor: '#666666',
							lineWidth: 1
						}
					}
				},
				series: [{
					name: '2013',
					marker: {
						symbol: 'square'
						
					},
					data: [10.089, 10.281, 11.240]

				}, {
					name: '2012',
					marker: {
						symbol: 'diamond'
					},
					data: [{
						y: 6.022,
					}, 5.286, 5.416]
				},
				{
					name: '2011',
					marker: {
						symbol: 'circle'
					},
					data: [{
						y: 445.000,
					}, 371.000, 394.000]
				}]
			});
		});
				</script>
				<!------------------------- Akhir dari Annual ---------------------------------------------------------------------->
	</body>
</html>
<?php
mysql_free_result($visual);
?>
