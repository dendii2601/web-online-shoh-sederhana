<div class="container-fluid">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row text-center mt-5">

    <?php foreach($jam as $brg) : ?>
      <div class="card ml-4 mb-4" style="width: 16rem;">
        <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
          <small><?php echo $brg->keterangan ?></small> <br>
          <span class="badge badge-primary mb-3">Rp.<?php echo number_format($brg->harga, 0,',','.')  ?></span>
          <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Tambah Ke Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-danger">Detail</div>') ?>
          
        </div>


      </div>
      
    <?php endforeach; ?>
    </div>
</div>