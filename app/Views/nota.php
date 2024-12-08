<main id="main" class="main">

  <div class="pagetitle">
    <h1>Nota</h1>
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
            <h5 class="card-title">Nota</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
      <thead>
        <tr>
          <th>No</th>
          <th>Id Transaksi</th>
          <th>Tanggal Nota</th>
          <th>Total Harga</th>
          <th>Metode Pembayaran</th>
          <th>Status Pembayaran</th>
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
            <td><?= $value->id_transaksi ?></td>
            <td><?= $value->tanggal_nota ?></td>
            <td><?= $value->total_harga ?></td>
            <td><?= $value->metode_pembayaran ?></td>
            <td><?= $value->status_pe ?></td>
            <td>
              <a href="<?= base_url('Home/editcos/'.$value->id_costumer) ?>
              " class="btn btn-info"><i class="bi bi-info-lg"></i></a>
              <a href="<?= base_url('Home/hapus_cos/'.$value->id_costumer) ?>
              "class="btn btn-danger" ><i class="bi bi-trash"></i></a>
            </td>
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