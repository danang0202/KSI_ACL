<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaanFasilitas extends Model
{
    use HasFactory;
    protected $table = 'penggunaan_fasilitas';
    
    // Disable timestamps if they are not included in the table
    public $timestamps = false;

     // Protect the primary key and not allow mass assignment
     protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'fasilitas_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id');
    }
}
