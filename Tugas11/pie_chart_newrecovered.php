<?php
include('koneksi.php');
$negara = mysqli_query($koneksi, "SELECT * FROM tb_negara");
while ($row = mysqli_fetch_array($negara)) {
	$nama_negara[] = $row['nama_negara'];

	$query = mysqli_query($koneksi, "SELECT sum(new_recovered) as new_recovered FROM tb_case WHERE id_negara='" . $row['id_negara'] . "'");
	$row = $query->fetch_array();
	$kasus_aktif[] = $row['new_recovered'];
}
?>
<!doctype html>
<html>

<head>
	<title>Pie Chart New Recovered</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<center>
		<h1>New Recovered COVID-19</h1>
		<div id="canvas-holder" style="width:50%">
			<canvas id="chart-area"></canvas>
		</div>
		<script>
			var config = {
				type: 'pie',
				data: {
					datasets: [{
						data: <?php echo json_encode($kasus_aktif); ?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(200, 165, 65, 0.2)',
							'rgba(30, 55, 150, 0.2)',
							'rgba(255, 162, 235, 0.2)',
							'rgba(54, 99, 132, 0.2)',
							'rgba(240, 199, 132, 0.2)',
							'rgba(200, 100, 140, 0.2)'
						],
						borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(200, 165, 65, 1)',
							'rgba(300, 55, 150, 1)',
							'rgba(255, 162, 235, 1)',
							'rgba(54, 99, 132, 1)',
							'rgba(240, 199, 132, 1)',
							'rgba(200, 100, 140, 1)'
						],
						label: 'Persentase Case COVID-19'
					}],
					labels: <?php echo json_encode($nama_negara); ?>
				},
				options: {
					responsive: true
				}
			};

			window.onload = function() {
				var ctx = document.getElementById('chart-area').getContext('2d');
				window.myPie = new Chart(ctx, config);
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
			document.getElementById('addDataset').addEventListener('click', function() {
				var newDataset = {
					backgroundColor: [],
					data: [],
					label: 'New dataset ' + config.data.datasets.length,
				};

				for (var index = 0; index < config.data.labels.length; ++index) {
					newDataset.data.push(randomScalingFactor());

					var colorName = colorNames[index % colorNames.length];
					var newColor = window.chartColors[colorName];
					newDataset.backgroundColor.push(newColor);
				}

				config.data.datasets.push(newDataset);
				window.myPie.update();
			});

			document.getElementById('removeDataset').addEventListener('click', function() {
				config.data.datasets.splice(0, 1);
				window.myPie.update();
			});
		</script>
	</center>
</body>

</html>