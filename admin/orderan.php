<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
</head>
<body>



<table id="example" class="table table-striped table-bordered" style="width:100%">
	<h3>Daftar Orderan </h3>
    <thead>
        <tr>
			<th>Foto</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $produk = mysqli_query($koneksi,"select * from produk");
        while($row = mysqli_fetch_array($produk))
        {
            echo "<tr>
            <td>".$row['foto_produk']."</td>
            <td>".$row['id_produk']."</td>
            <td>".$row['nama_produk']."</td>
            <td>".$row['harga_produk']."</td>
            <td>".$row['stok_produk']."</td>
            <td>".$row['deskripsi_produk']."</td>
				
			</td>
        </tr>";
        
        }
    ?>
    </tbody>

    <script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>

</table>
</body>
</html>

 
</script>
		
</table>
<h3>Daftar Orderan Djadjan</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>No. Pesanan</th>
			<th>Username</th>
			<th>Tanggal Pemesanan</th>
			<th>Total Tagihan</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no = 1; 
			$query = $koneksi->query("SELECT * FROM pemesanan");
			while ($datapesanan = $query->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $datapesanan['no_pemesanan']; ?></td>
			<td><?php echo $datapesanan['username']; ?></td>
			<td><?php echo $datapesanan['tanggal_pesan']; ?></td>
			<td>Rp <?php echo number_format($datapesanan['total_bayar']); ?>,-</td>
			<td><?php echo $datapesanan['status_kirim']; ?></td>
			<td width="205px">
				<a class="btn btn-info" href="index.php?halaman=detail&pesanan=<?php echo $datapesanan['no_pemesanan']; ?>">Detail</a>
			<?php 
				if($datapesanan['status_kirim'] == "Pengecekan Pembayaran") :
			?>
				<a class="btn btn-sm btn-success" href="index.php?halaman=bayar&pesanan=<?php echo $datapesanan['no_pemesanan']; ?>">
					Cek Pembayaran
				</a>
			<?php endif ?>
			</td>
		</tr>
		<?php
			$no++;
			}
		?>
	</tbody>
</table>