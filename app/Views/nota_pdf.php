<!DOCTYPE html>
<html>
<head>
    <title>Nota Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid black;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Nota Pesanan</h2>
        <p>Nomor Pesanan: <?= $order->id_order ?></p>
        <p>Tanggal Pesanan: <?= $order->tanggal_pesan ?></p>
    </div>
    <table class="table">
        <tr>
            <th>Nama Pelanggan</th>
            <td><?= $order->nama_pelanggan ?></td>
        </tr>
        <tr>
            <th>Menu</th>
            <td><?= $order->menu ?></td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td><?= $order->jumlah ?></td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>Rp.<?= number_format($order->total_harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <th>Metode Pembayaran</th>
            <td><?= ucfirst($order->metode_pembayaran) ?></td>
        </tr>
    </table>
</body>
</html>
