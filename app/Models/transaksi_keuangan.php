<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_keuangan extends Model
{
    use HasFactory;
    protected $table = 'transaksi_keuangan';
    protected $fillable=['ID','ID_Pasien','Tanggal_Transaksi','Jenis_Transaksi','Jumlah_Transaksi'];
    public $timestamps = false;
    protected $primaryKey = 'ID';
}
