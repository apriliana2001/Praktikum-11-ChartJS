<?php
include('konek.php');
$india      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='India'");
$korea      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='S. Korea'");
$turkey      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Turkey'");
$vietnam      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Vietnam'");
$japan      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Japan'");
$iran      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Iran'");
$indonesia      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Indonesia'");
$malaysia      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Malaysia'");
$thailand      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Thailand'");
$israel      = mysqli_query($koneksi, "SELECT * FROM tb_covid WHERE country='Israel'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Line Chart Data Covid-19</title>
	<script type="text/javascript" src="chart.js"></script>
	<style type="text/css">
		.container {
                width: 65%;
                margin: 15px auto;
            }
	</style>
</head>
<body>
	<div class="container">
		<canvas id="linechart" width="100" height="100"></canvas>
	</div>

	<script>
		var ctx = document.getElementById("linechart").getContext("2d");
  		var data = {
            labels: ["Total Cases","Total Deaths","New Deaths","Total Recovered","New Recovered"],
            datasets: [
                  {
                    label: "India",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#964B00",
                    borderColor: "#964B00",
                    pointHoverBackgroundColor: "#964B00",
                    pointHoverBorderColor: "#964B00",
                    data: [<?php while ($p = mysqli_fetch_array($india)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "S. Korea",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($korea)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Turkey",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($turkey)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Vietnam",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F33A3A",
                    borderColor: "#F33A3A",
                    pointHoverBackgroundColor: "#F33A3A",
                    pointHoverBorderColor: "#F33A3A",
                    data: [<?php while ($p = mysqli_fetch_array($vietnam)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Japan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#B06880",
                    borderColor: "#B06880",
                    pointHoverBackgroundColor: "#B06880",
                    pointHoverBorderColor: "#B06880",
                    data: [<?php while ($p = mysqli_fetch_array($japan)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Iran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#568203",
                    borderColor: "#568203",
                    pointHoverBackgroundColor: "#568203",
                    pointHoverBorderColor: "#568203",
                    data: [<?php while ($p = mysqli_fetch_array($iran)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Indonesia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CCFF00",
                    borderColor: "#CCFF00",
                    pointHoverBackgroundColor: "#CCFF00",
                    pointHoverBorderColor: "#CCFF00",
                    data: [<?php while ($p = mysqli_fetch_array($indonesia)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Malaysia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#9B59B6",
                    borderColor: "#9B59B6",
                    pointHoverBackgroundColor: "#9B59B6",
                    pointHoverBorderColor: "#9B59B6",
                    data: [<?php while ($p = mysqli_fetch_array($malaysia)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Thailand",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#808080",
                    borderColor: "#808080",
                    pointHoverBackgroundColor: "#808080",
                    pointHoverBorderColor: "#808080",
                    data: [<?php while ($p = mysqli_fetch_array($thailand)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  },

                  {
                    label: "Israel",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#808000",
                    borderColor: "#808000",
                    pointHoverBackgroundColor: "#808000",
                    pointHoverBorderColor: "#808000",
                    data: [<?php while ($p = mysqli_fetch_array($israel)) { echo '"' . $p['total_cases'] . '","' . $p['total_deaths'] . '","' . $p['new_deaths'] . '","' . $p['total_rcv'] . '","' . $p['new_rcv'] . '",';}?>]
                  }
                  ]
              };
              var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });

	</script>
</body>
</html>