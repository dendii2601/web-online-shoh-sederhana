<div class="container-fluid mb-5">
	<h4 style="text-align: center">Keranjang belanja</h4>
	<table class="table table-bordered table-striped table-hover text-top">
		<tr>
			<th style="text-align: center"> No</th>
			<th style="text-align: center">Nama Produk</th>
			<th style="text-align: center">Jumlah</th>
			<th style="text-align: center">Harga</th>
			<th style="text-align: center">Sub-Total</th>
		</tr>
		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items ): ?>
			<tr>
				<td style="text-align: center"><?php echo $no++  ?></td>
				<td><?php echo $items['name']  ?></td>
				<td style="text-align: right"><?php echo $items['qty']  ?></td>
				<td style="text-align: right">Rp.<?php echo number_format($items['price'],0,',','.')  ?></td>
				<td style="text-align: right">Rp.<?php echo  number_format($items['subtotal'],0,',','.')   ?></td>
			</tr>
			
		<?php endforeach;  ?>
		<tr>
				<td colspan="4">Total :</td>
				<td style="text-align: right">Rp.<?php echo  number_format($this->cart->total(),0,',','.')   ?></td>
			</tr>
	</table>
	<div style="text-align: center">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?> "><div class="btn btn-sm btn-outline-danger ml-2">Hapus Keranjang</div></a>
	
	
		<a href="<?php echo base_url('dashboard') ?> "><div class="btn btn-sm btn-outline-dark ml-2">Kembali ke Toko</div></a>
	
	
		<a href="<?php echo base_url('dashboard/pembayaran') ?> "><div class="btn btn-sm btn-outline-success ml-2">Pembayaran
		</div></a>
</div>