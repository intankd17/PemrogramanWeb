<h2>Selamat Datang User Pada Hari <span id="tanggalwaktu"></span></p>

	<script>
		var tw = new Date();
		if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
		else(a = tw.getTime());
		tw.setTime(a);
		var tahun = tw.getFullYear();
		var hari = tw.getDay();
		var bulan = tw.getMonth();
		var tanggal = tw.getDate();
		var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
		var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
		document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
	</script>
	<hr>

	<h3>Data Guestbook</h3>

	<p><a href="index.php?halaman=tambahdata" class="btn btn-primary">TAMBAH DATA</a></p>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					<center>NO</center>
				</th>
				<td>
					<center>POSTED</center>
				</td>
				<td>
					<center>NAME</center>
				</td>
				<td>
					<center>EMAIL</center>
				</td>
				<td>
					<center>ADDRESS</center>
				</td>
				<td>
					<center>CITY</center>
				</td>
				<td>
					<center>MESSAGE</center>
				</td>
				<td>
					<center>ACTION</center>
				</td>
			</tr>
		</thead>
		<tbody>
			<?php $nomor = 1; ?>
			<?php $ambil = $koneksi->query("SELECT * FROM guestbook"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()) { ?>
				<tr>
					<td>
						<center><?php echo $nomor; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['posted']; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['name']; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['email']; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['address']; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['city']; ?></center>
					</td>
					<td>
						<center><?php echo $pecah['message']; ?></center>
					</td>
					<td>
						<center>
							<a href="index.php?halaman=ubahdata&id=<?php echo $pecah['id']; ?>" class="btn btn-warning btn-sm">UBAH</a>
							<a href="index.php?halaman=hapusdata&id=<?php echo $pecah['id']; ?>" class="btn btn-danger btn-sm">HAPUS</a>
						</center>
					</td>
				</tr>
				<?php $nomor++; ?>
			<?php } ?>
		</tbody>
	</table>