<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    
    // Disable timestamps if they are not included in the table
    public $timestamps = false;

     // Protect the primary key and not allow mass assignment
     protected $guarded = ['id'];

    protected $fillable = [
        'nama_fasilitas'
    ];

    public function penggunaanFasilitas()
    {
        return $this->hasMany(PenggunaanFasilitas::class, 'penggunaan_fasilitas_id');
    }
}
