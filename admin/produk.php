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
<h2>Data Barang</h2>
<br>
<a class="btn btn-info" href="index.php?halaman=inputbarang">Tambah Barang</a>
<br>
<br>
<table id="example" class="table table-striped table-bordered" style="width:100%">
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