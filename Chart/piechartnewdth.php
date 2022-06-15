<?php
include('konek.php');
$country = mysqli_query($koneksi, "SELECT * from tb_covid");
while($row = mysqli_fetch_array($country)){
	$nama_country[] = $row['country'];

	$query = mysqli_query($koneksi, "SELECT sum(new_deaths) as new_deaths from tb_covid where no='".$row['no']."'");
	$row = $query->fetch_array();
	$jumlah_country[] = $row['new_deaths'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pie Chart New Deaths Covid-19</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
<body>
	<div id="canvas-holder" style="width:40%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode ($jumlah_country);
					?>,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(214, 134, 13, 0.2)',
						'rgba(138, 4, 113, 0.2)',
						'rgba(26, 214, 14, 0.2)',
						'rgba(235, 53, 110, 0.2)',
						'rgba(52, 82, 235, 0.2)',
						'rgba(218, 165, 32, 0.2)'
					],
					borderColor: [
						'rgba(255, 99, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(214, 134, 13, 1)',
						'rgba(138, 4, 113, 1)',
						'rgba(26, 214, 14, 1)',
						'rgba(235, 53, 110, 1)',
						'rgba(52, 82, 235, 1)',
						'rgba(218, 165, 32, 1)'
					],
					label: 'Presentase Total Cases Covid'
				}],
				labels: <?php echo json_encode($nama_country); ?>},
				options: {
					responsive: true
				}
			};
			window.onload = function() {
				var ctx = document.getElementById('chart-area').getContext('2d');
				window.myPie = new Chart (ctx, config);
			};
			document.getElementById('randomizeData').addEventListener('click', function() {
				config.data.datasets.forEach(function(dataset) {
					dataset.data = dataset.data.map(function() {
						return randomScalingFactor();
					});
				});
				window.myPie.update();
			});
			var colorNames = Object.keys(window.chartColors);
			document.getElementById('addDataset').addEventListener('click',function(){
				var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' +
				config.data.datasets.length,
			};

				for (var index = 0; index < config.data.labels.length; 
					++index) {
					newDataset.data.push(randomScalingFactor());
					var colorName = colorNames [index % colorNames.length];
					var newColor = window.chartColors[colorName]; 
					newDataset.backgroundColor.push(newColor);
				}
				config.data.datasets.push(newDataset); 
				window.myPie.update();
			});
			document.getElementById('removeDataset').addEventListener('click', function () {
				config.data.datasets.splice(0, 1); 
				window.myPie.update();
			});
	</script>

</body>
</html>