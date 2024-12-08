<main id="main" class="main">

  <div class="pagetitle">
    <h1>Isi Form</h1>
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
            <h5 class="card-title">keranjang</h5>

            <div class="menu-items">
              <?php foreach ($takdirestui as $key => $value): ?>
                <!-- Mulai Form -->
                <form action="<?= base_url('home/simpan_karyawan') ?>" method="post" class="menu-item">
                  <!-- Gambar -->
                  <img src="<?= base_url('img/' . $value['foto']) ?>" alt="<?= $value['name'] ?>" width="500px">
                  <h3><?= $value['nama_menu'] ?></h3>
                  <p><?= $value['status'] ?></p>
                  <p>Rp.<?= number_format($value['harga'], 0, ',', '.') ?>,00</p>

                  <!-- Input Tersembunyi -->
                  <input type="hidden" name="idk" value="<?= $value['id_keranjang'] ?>">
                

                  <!-- Tombol -->
                  <button type="submit" class="btn btn-dark">
                    <i class="fas fa-save"></i> Edit
                  </button>
                  <a href="<?= base_url('home/hapus_karyawan/' . $value['id_user']) ?>" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Hapus
                  </a>
                </form>
                <!-- Akhir Form -->
              <?php endforeach; ?>
            </div>

          </div>
        </div>
        
      </div>
    </div>
  </section>

</main>
s