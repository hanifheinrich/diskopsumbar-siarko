<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["nama","gambar"];


    public function Koperasi()
    {
        return $this->hasMany(Koperasi::class, 'id_kotakab','id');
    }
}
