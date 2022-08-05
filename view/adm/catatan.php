<h3 class='page-header'>Catatan Guru</h3>
	<div class='table-responsive'>
	<?php 
		if (isset($_GET['id_guru'])) {
			if ($_GET['id_guru']!=="") {
				$id_user=$_GET['id_guru'];
				include './view/note.php';
			} else {
				header("location:catatan");
			}
		} else {
			$sql = "SELECT*FROM detail_user ORDER BY sklh_user ASC";
			if ($conn->query($sql)->num_rows!==0) {
				echo "<table class='table table-striped' style='width:50%'>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama </th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>";
				$query_guru = $conn->query($sql);
				$no=0;
				while ($get_guru = $query_guru->fetch_assoc()) {
					$id_guru = $get_guru['id_user'];
					$name = $get_guru['name_user'];
					$school = $get_guru['sklh_user'];
					$no++;
					echo "<tr>
							<td>$no</td>
							<td>$name</td>
							<td>$school</td>
							<td><a href='catatan&id_guru=$id_guru' title='Catatan $name'>Lihat Catatan</a></td>
						</tr>";
				}
				$conn->close();
				echo "</tbody></table>";
			} else {
				echo "<div class='alert alert-danger'><strong>Tidak ada guru untuk ditampilkan</strong></div>";
			}
		}
	 ?>
</div>
