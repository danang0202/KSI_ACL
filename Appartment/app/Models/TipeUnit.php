<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeUnit extends Model
{
    use HasFactory;
    protected $table = 'tipe_unit';

    // Disable timestamps if they are not included in the table
    public $timestamps = false;

    // Protect the primary key and not allow mass assignment
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_tipe_unit'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
