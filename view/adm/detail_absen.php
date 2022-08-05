<h3 class='page-header'>Detail Absensi Guru Paud ABATASA</h3>
	<div class='table-responsive'>
	<?php 
		if (isset($_GET['id_guru'])) {
			if ($_GET['id_guru']!=="") {
				$id_user=$_GET['id_guru'];
				include './view/detail_absen.php';
			} else {
				header("location:absensi");
			}
		} else {
			$sql = "SELECT*FROM detail_user ORDER BY sklh_user ASC";
			$query = $conn->query($sql);
			if ($query->num_rows!==0) {
				echo "<table class='table table-striped' style='width:50%'>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Guru</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>";
				$no=0;
				while ($get_guru = $query->fetch_assoc()) {
					$id_guru = $get_guru['id_user'];
					$name = $get_guru['name_user'];
					$school = $get_guru['sklh_user'];
					$no++;
					echo "<tr>
							<td>$no</td>
							<td>$name</td>
							<td>$school</td>
							<td><a href='absensi&id_guru=$id_guru' title='Absensi $name'>Lihat Absensi</a></td>
						</tr>";
				}
				echo "</tbody></table>";
				$conn->close();
			} else {
				echo "<div class='alert alert-danger'><strong>Tidak ada Guru untuk ditampilkan</strong></div>";
			}
		}
	 ?>
</div>
