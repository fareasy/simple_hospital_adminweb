<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $fillable=['NIP_Dokter','Nama_Dokter','Tanggal_Lahir','Jenis_Kelamin','Alamat',
    'No_HP','Bidang_Spesialisasi'];
    public $timestamps = false;
    protected $primaryKey = 'NIP_Dokter';
}
