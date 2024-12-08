<main id="main" class="main">

  <div class="pagetitle">
    <h1> Pesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pesanan</h5>
<!-- order_confirmation.php -->
<form action="<?= base_url('home/filterbm') ?>" method="post"> 
<h2>Konfirmasi Pesanan</h2>
<p>Nama: <?= $nama ?></p>
<p>Alamat: <?= $alamat ?></p>
<p>Nama Makanan: <?= $nama_makanan ?></p>
<p>Jumlah Pesan: <?= $jumlah_pesan ?></p>
<p>Tanggal Pesanan: <?= $tanggal_pesan ?></p>
<p>Total Harga: Rp<?= number_format($total_harga, 0, ',', '.'); ?></p>
<button type="submit" class="btn btn-info">
                  <i class="bi-printer"></i> Print
                </button>

</div>
      </div>

    </div>
  </div>
</section>


