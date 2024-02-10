<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permission';
    
    // Disable timestamps if they are not included in the table
    public $timestamps = false;

     // Protect the primary key and not allow mass assignment
     protected $guarded = ['id'];

    protected $fillable = [
        'fasilitas_id',
        'access'
    ];

    public function userPermission()
    {
        return $this->hasMany(UserPermission::class, 'user_permission_id');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id');
    }
}