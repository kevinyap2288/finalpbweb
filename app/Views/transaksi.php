<main id="main" class="main">

  <div class="pagetitle">
    <h1>Table Karyawan</h1>
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
            <h5 class="card-title">Karyawan</h5>
            <a href="<?= base_url('home/tkry') ?>" class="btn btn-success">+Tambah</a>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Id Karyawan</th>
                  <th >Id Costumer</th>
                  <th >Id Kurir</th>
                  <th >Id Nota</th>
                  <th >Jenis Transaksi</th>
                  <th >Tanggal Transaksi</th>
                  <th >Jumlah Item</th>
                  <th >Harga Per-Item</th>
                  <th >Subtotal</th>
                  <th >Total Harga</th>
                  <th>Aksi</th>

                </tr>
              </thead>
              <tbody>

                <?php
                $ms=1;
                foreach ($takdirestui as $key => $value) {
                  ?>
                  <tr>
                    <td><?= $ms++ ?></td>
                    <td><?= $value->id_karyawan?></td>
                    <td><?= $value->id_costumer ?></td>
                    <td><?= $value->id_kurir?></td>
                    <td><?= $value->id_nota?></td>
                    <td><?= $value->jenis_transaksi ?></td>
                    <td><?= $value->tanggal_transaksi ?></td>
                    <td><?= $value->jumlah ?></td>
                    <td><?= $value->harga_per_item?></td>
                    <td><?= $value->subtotal?></td>
                    <td><?= $value->total_harga?></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>