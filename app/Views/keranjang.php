<main id="main" class="main">

  <div class="pagetitle">
    <h1>Order</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Order</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="table-container">
      <h2>Daftar Pesanan</h2>
      <table class="order-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Pelanggan</th>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($takdirestui as $key => $order): ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><?= esc($order['nama_pelanggan']) ?></td>
              <td><?= esc($order['menu']) ?></td>
              <td><?= $order['jumlah'] ?></td>
              <td>Rp. <?= number_format($order['total_harga'], 0, ',', '.') ?></td>
              <td>
                <span class="status <?= strtolower($order['status']) ?>">
                  <?= esc($order['status']) ?>
                </span>
              </td>
              <td>
                <button class="btn btn-dark btn-sm">Detail</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>

  <style>
    /* Table Container */
    .table-container {
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .table-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
    }

    /* Table Styles */
    .order-table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .order-table thead th {
      background-color: #343a40;
      color: white;
      padding: 10px;
      text-align: left;
    }

    .order-table tbody td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .order-table tbody tr:hover {
      background-color: #f8f9fa;
    }

    /* Status Styles */
    .status {
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
    }

    .status.pending {
      background-color: #ffc107;
      color: #fff;
    }

    .status.completed {
      background-color: #28a745;
      color: #fff;
    }

    .status.cancelled {
      background-color: #dc3545;
      color: #fff;
    }

    /* Button Styles */
    .btn {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 12px;
      margin-right: 5px;
    }

    .btn-dark {
      background-color: #343a40;
      color: white;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
    }

    .btn:hover {
      opacity: 0.8;
    }
  </style>

</main>
