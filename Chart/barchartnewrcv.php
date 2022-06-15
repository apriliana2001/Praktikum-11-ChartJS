<?php
include('konek.php');
$country = mysqli_query($koneksi, "SELECT * from tb_covid");
while($row = mysqli_fetch_array($country)){
	$nama_country[] = $row['country'];

	$query = mysqli_query($koneksi, "SELECT sum(new_rcv) as new_rcv from tb_covid where no='".$row['no']."'");
	$row = $query->fetch_array();
	$jumlah_country[] = $row['new_rcv'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Recovered Covid 19</title>
	<script type="text/javascript" src="chart.js"></script>
</head>
<body>
	<div style="width: 800px; height: 800px;">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_country); ?>,
				datasets: [{
					label: 'New Recovered',
					data: <?php echo json_encode($jumlah_country);
					?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>