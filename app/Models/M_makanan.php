<?php
namespace App\Models;

use CodeIgniter\Model;

class M_makanan extends Model
{
    protected $table = 'makanan'; // Tabel makanan
    protected $primaryKey = 'id_makanan'; // Primary key tabel makanan
    protected $allowedFields = ['id_makanan', 'nama_menu', 'harga', 'foto']; // Kolom-kolom yang dapat diisi
}
