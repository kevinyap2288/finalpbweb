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
<form action="<?= base_url('home/proses_pesanan') ?>" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required><br><br>

    <label for="jumlah_pesan">Jumlah Pesan:</label>
    <input type="number" id="jumlah_pesan" name="jumlah_pesan" min="1" required><br><br>

    <input type="hidden" name="harga_per_item" value="<?= $item->harga; ?>">
    <input type="hidden" name="id_makanan" value="<?= $item->id_makanan; ?>">

    <button type="submit">Hitung Total</button>
</form>
</div>
      </div>

    </div>
  </div>
</section>

