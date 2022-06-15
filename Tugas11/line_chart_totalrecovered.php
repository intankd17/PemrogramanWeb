<?php
include('koneksi.php');
$negara = mysqli_query($koneksi, "SELECT * FROM tb_negara");
while ($row = mysqli_fetch_array($negara)) {
	$nama_negara[] = $row['nama_negara'];

	$query = mysqli_query($koneksi, "SELECT sum(total_recovered) as total_recovered FROM tb_case WHERE id_negara='" . $row['id_negara'] . "'");
	$row = $query->fetch_array();
	$jumlah_recovered[] = $row['total_recovered'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Line Chart Total Recovered</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					label: 'Total Recovered COVID-19',
					data: <?php echo json_encode($jumlah_recovered); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
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