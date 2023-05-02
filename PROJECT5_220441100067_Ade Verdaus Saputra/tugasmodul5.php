<!DOCTYPE html>
<html>
<head>
	<title>Form Penjualan</title>
	<link rel="stylesheet" href="tugas.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Form Penjualan</title>
	<link rel="stylesheet" href="tugas.css">
</head>
<body>
	<form method="post">
		<h1 style=""> TOKO BARANG ELEKTRONIK</h1>
		<label for="nama_barang">Nama Barang:</label><br>
		<select id="nama_barang" name="nama_barang">
			<option value="Kulkas" <?php if(isset($_POST['nama_barang']) && $_POST['nama_barang'] == 'Kulkas') echo 'selected'; ?>>Kulkas</option>
			<option value="TV DVD" <?php if(isset($_POST['nama_barang']) && $_POST['nama_barang'] == 'TV DVD') echo 'selected'; ?>>TV DVD</option>
			<option value="Freezer" <?php if(isset($_POST['nama_barang']) && $_POST['nama_barang'] == 'Freezer') echo 'selected'; ?>>Freezer</option>
			<option value="Radio" <?php if(isset($_POST['nama_barang']) && $_POST['nama_barang'] == 'Radio') echo 'selected'; ?>>Radio</option>
			<option value="Video Game" <?php if(isset($_POST['nama_barang']) && $_POST['nama_barang'] == 'Video Game') echo 'selected'; ?>>Video Game</option>
		</select><br><br>
		<label for="harga_barang">Harga Barang:</label><br>
		<input type="number" id="harga_barang" name="harga_barang" value="<?php 
		if(isset($_POST['nama_barang'])) {
			switch($_POST['nama_barang']) {
				case 'Kulkas':
					echo '100000';
					break;
				case 'TV DVD':
					echo '200000';
					break;
				case 'Freezer':
					echo '50000';
					break;
				case 'Radio':
					echo '10000';
					break;
				case 'Video Game':
					echo '200000';
					break;
				default:
					echo '';
			}
		}
		?>" readonly><br><br>

		<label for="jumlah_barang">Jumlah Barang:</label><br>
		<input type="number" id="jumlah_barang" name="jumlah_barang"><br><br>

		<button type="submit" name="submit">Beli</button>
		<button type="submit" name="hapus">Kosongkan</button>
	</form>

	</form>

	<?php
	if (isset($_POST['submit'])) {
		$namaBarang = $_POST['nama_barang'];
		$hargaBarang = $_POST['harga_barang'];
		$jumlahBarang = $_POST['jumlah_barang'];
		$harga = $hargaBarang * $jumlahBarang;
		$diskon = ($harga >= 50000) ? $harga * 0.1 : 0;
		$total = $harga - $diskon;
		$bonus = ($harga >= 50000) ? 'Buku' : 'Tidak ada';
	?>

	<div id="hasil-penjualan" style="display: block;">
		<h2>Hasil Penjualan</h2>
		<p>Nama Barang: <?php echo $namaBarang; ?></p>
		<p>Harga Barang: <?php echo $hargaBarang; ?></p>
		<p>Jumlah Barang: <?php echo $jumlahBarang; ?></p>
		<p>Harga: Rp <?php echo $harga; ?></p>
		<p>Diskon: Rp <?php echo $diskon; ?></p>
		<p>Total Bayar: Rp <?php echo $total; ?></p>
		<p>Bonus: <?php echo $bonus; ?></p>
	</div>

	<?php
	} elseif(isset($_POST['hapus'])) {
		$namaBarang = "";
		$hargaBarang = "";
		$jumlahBarang = "";
		$harga = "";
		$diskon ="";
		$total = "";
		$bonus = "";
	
	?>

<div id="hasil-penjualan" style="display: block;">
<h2>Hasil Penjualan</h2>
		<p>Nama Barang: <?php echo $namaBarang; ?></p>
		<p>Harga Barang: <?php echo $hargaBarang; ?></p>
		<p>Jumlah Barang: <?php echo $jumlahBarang; ?></p>
		<p>Harga: Rp <?php echo $harga; ?></p>
		<p>Diskon: Rp <?php echo $diskon; ?></p>
		<p>Total Bayar: Rp <?php echo $total; ?></p>
		<p>Bonus: <?php echo $bonus; ?></p>
	</div>

	<?php
	}
	?>

</body>
</html>
