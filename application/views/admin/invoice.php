<div class="container-fluid">
	
	<h3 align="center">Data Pemesanan Produk</h3>
	
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th><center>Id Invoice</th>
			<th><center>Nama Pemesan</th>
			<th><center>Alamat Pemesanan</th>
			<th><center>Tanggal Pemesanan</th>
			<th><center>Batas Pembayaran</th>
			<th><center>Aksi</th>

		</tr>
		<?php foreach ($invoice as $inv): ?>
			<tr>
				<td align="center"><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td> <?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-success">Detail</div>') ?></td>

             </tr>
		<?php endforeach; ?>
	</table>
</div>