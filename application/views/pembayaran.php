<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<div class="alert alert-primary">
				<?php $grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
                    foreach ($keranjang as $item) 
                    {
						$grand_total = $grand_total + $item['subtotal'];
					}
				 echo "<center>Total Belanja Anda : Rp.".number_format($grand_total,0,',','.');
                 ?>
			</div> <br>
			
			<h4 align="center">Input Form Alamat Pemesanan dan Pembayaran</h4>
			<br>
			
			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>  ">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder=" Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder=" Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. telepon</label>
					<input type="text" name="no_telp" placeholder=" Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>Go-Send</option>
						<option>J&T Express</option>
						<option>Pos</option>
						<option>TIKI</option>
                        <option>JNE</option>
                        <option>Grab-Send</option>
					</select>
				</div>
                
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BRI - XXXXXXXXXX</option>
						<option>BNI - XXXXXXXXXX</option>
						<option>MANDIRI - XXXXXXXXXX</option>
					</select>		
				</div>

					<button type="submit" class="btn btn-sm btn-success mb-3">Pesan</button>

			</form>
			<?php  
		}else
			{
				echo "<h4><center >Keranjang Belanja Anda Masih Kosong</center></h4>";
			
			}	 ?>
				
		</div>

		<div class="col-md-2"></div>
	</div>
</div>