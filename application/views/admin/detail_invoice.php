<div class="container-fluid">
	
	<h4 align="center">Detail pesanan <div class="btn btn-sm btn-success">No Invoice : <?php echo $invoice->id ?></div></h4>
	
	<a class="btn btn-sm btn-primary mb-4" href="<?php echo base_url('admin/detail_invoice/pdf') ?>"><i class="fas fa-file-export"></i>Export Pdf</a>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th><center>Id Barang</th>
			<th><center>Nama Produk</th>
			<th><center>Jumlah Pesanan</th>
			<th><center>Harga</th>
			<th><center>Sub-total</th>
		</tr>
		<?php
			$total= 0;
			foreach ($pesanan as $psn):
				$subtotal = $psn->jumlah * $psn->harga;
				$total += $subtotal;
		    ?>

			  <tr>
			  	<td align="center"><?php echo $psn->id ?></td>
			  	<td align="center"><?php echo $psn->nama_brg ?></td>
			  	<td align="right"><?php echo $psn->jumlah ?></td>
			  	<td align="right">Rp. <?php echo number_format($psn->harga,0,',','.' ) ?></td>
			  	<td align="right">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
			  </tr>


			<?php endforeach;  ?>
			<tr>
				<td colspan="4" align="right"> <h5> Total :</h5></td>
				<td align="right">Rp. <?php echo number_format($total,0,',','.')   ?></td>
			</tr>
            
	</table>
    <a href="<?php echo base_url('admin/invoice/index') ?> "><div class="btn btn-sm btn-outline-danger">Kembali</div></a>

</div>