<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MTransaksi extends Model
{
    protected $table = 'transaksi';
     protected $primaryKey = 'id';
     protected $allowedFields = ['kode_transaksi', 'nama_transaksi', 'nominal'];
} 