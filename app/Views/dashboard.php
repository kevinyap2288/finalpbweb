<main id="main" class="main">

    <div class="pagetitle">
        <h1>Menu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item active">Menu</li>
            </ol>
        </nav>
    </div>

    <div class="menu-container">
        <h2>Menu Makanan</h2>
        <form id="orderForm" action="<?= base_url('home/tambahPesanan') ?>" method="post" enctype="multipart/form-data">
            <!-- Detail Pelanggan dan Pembayaran -->
            <div class="order-form">
                <h4>Detail Pelanggan</h4>
                <input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Anda" required>

                <h4>Pilih Metode Pembayaran</h4>
                <select name="metode_pembayaran" class="payment-select" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="gopay">GoPay</option>
                    <option value="dana">Dana</option>
                    <option value="ovo">OVO</option>
                    <option value="bank_transfer">Transfer Bank</option>
                </select>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>

            <!-- Menu Pilihan -->
            <!-- Menu Pilihan -->
            <div class="menu-items">
                <?php foreach ($takdirestui as $key => $value): ?>
                    <div class="menu-item">
                        <img src="<?= base_url('img/' . $value['foto']) ?>" alt="<?= $value['nama_menu'] ?>" width="100%">
                        <h3><?= $value['nama_menu'] ?></h3>
                        <p>Status: <b><?= $value['status'] ?></b></p>
                        <p>Rp.<?= number_format($value['harga'], 0, ',', '.') ?></p>
                        <?php if ($value['status'] == 'tersedia'): ?>
                            <label>
                                <input type="checkbox" name="menu[]" value="<?= $value['id_makanan'] ?>"> Pilih Menu
                            </label>
                            <!-- Menambahkan input untuk nama, harga, dan jumlah -->
                            <input type="hidden" name="nama_menu_<?= $value['id_makanan'] ?>" value="<?= $value['nama_menu'] ?>">
                            <input type="hidden" name="harga_<?= $value['id_makanan'] ?>" value="<?= $value['harga'] ?>">
                            <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" value="1" required>
                        <?php else: ?>
                            <p class="text-danger">Tidak tersedia</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </form>


    </div>
</main>

<style>
    .menu-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .menu-items {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }

    .menu-item {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .menu-item img {
        max-width: 100%;
        height: auto;
    }

    .order-form {
        margin-top: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .payment-select, input[type="text"], input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
