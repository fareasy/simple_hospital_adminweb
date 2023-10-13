<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $fillable=['ID','Nama_Obat','Deskripsi_Obat'];
    public $timestamps = false;
    protected $primaryKey = 'ID';
}
