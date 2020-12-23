<!DOCTYPE html>
<html>
<head>
	<title>KERANJANG</title>
	<meta charset="utf-8">
    <?php include 'scrsty.php'; ?>
</head>
<body>

<?php include 'navbar.php'; ?>

	<div align="center" style="margin: 15px">
	<div class="card" style="width: 60rem; margin: 30px;">
		<div class="card-body">

			<table class="table table-borderless">
			  <thead>
			    <tr>
			      <th>
			      	<div class="form-check">
					  <input class="form-check-input position-static" type="checkbox" id="#" value="option1" onchange="checkAll(this)" name="chk[]">&nbsp Pilih Semua
					</div>
			      </th>
			      <th></th>
			      <th style="text-align: center;">
			      	<a href="hapusproduk.php"><img src="icon/delete.png" style="width: 25px"></a>
			      </th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td style="width: 10rem">
			      	<div class="form-check">
					  <input class="form-check-input position-static" type="checkbox" id="#" name="chkbox[]">
					</div>
			      </td>
			      	<td>
			      		Nama Produk <br>
			      		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg> Jumlah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg><br>
			      		Harga
			  		</td>
			  		<td style="width: 5rem; text-align: center;">
			  			<a href="hapusproduk.php"><img src="icon/delete.png" style="width: 25px"></a>
			  		</td>
			    </tr>

			    <tr>
			      <td style="width: 10rem">
			      	<div class="form-check">
					  <input class="form-check-input position-static" type="checkbox" id="#" name="chkbox[]">
					</div>
			      </td>
			      	<td>
			      		Nama Produk <br>
			      		Jumlah <br>
			      		Harga
			  		</td>
			  		<td style="width: 5rem; text-align: center;">
			  			<a href="hapusproduk.php"><img src="icon/delete.png" style="width: 25px"></a>
			  		</td>
			    </tr>
			    
			  </tbody>
			  <tfoot>
			  	<tr>
			  		<th>
			  			Total
			  		</th>
			  		<th style="text-align: right;">
			  			Rp. 12.000.000
			  		</th>
			  		<th style="text-align: right;">
			  			<a href="beli.php" class="btn btn-sm btn-success" style="font-size: 15px;">&nbsp Beli &nbsp</a> 
			  		</th>
			   	</tr>
			  </tfoot>
			</table>
		</div>
	</div>
	</div>

<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>

<?php include 'footer.php'; ?>

</body>
</html>