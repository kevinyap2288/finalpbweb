<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .nota-container {
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 400px;
            margin: auto;
        }
        .nota-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .nota-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .nota-container table td {
            padding: 8px 0;
        }
        .nota-container .total {
            font-weight: bold;
        }
        .kembalian {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="nota-container">
        <h2>Nota Pembayaran</h2>
        <table>
            <tr>
                <td>ID Order:</td>
                <td><?= esc($order['id_order']); ?></td>
            </tr>
            <tr>
                <td>Nama Pelanggan:</td>
                <td><?= esc($order['nama_pelanggan']); ?></td> <!-- Sesuaikan dengan field di tabel -->
            </tr>
            <tr>
                <td>Total Harga:</td>
                <td>Rp <?= number_format($order['total_harga'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Metode Pembayaran:</td>
                <td><?= esc(ucfirst($metode_pembayaran)); ?></td>
            </tr>
            <tr>
                <td>Nominal Uang:</td>
                <td>Rp <?= number_format($nominal_uang, 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Kembalian:</td>
                <td class="kembalian">Rp <?= number_format($kembalian, 0, ',', '.'); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
