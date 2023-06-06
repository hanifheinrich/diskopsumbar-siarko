<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreignKey = 'id_kotakab';
    public $timestamps = false;
    
    protected $fillable = [
        'nama_koperasi',
        'arsip_pendirian',
        'arsip_pad_1',
        'arsip_pad_2',
        'arsip_pad_3',
        'id_kotakab',
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'id_kotakab', 'id');
    }

}
