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
        'slug_objek',
        'nama_objek'
    ];

    public function userPermission()
    {
        return $this->hasMany(UserPermission::class, 'user_permission_id');
    }
}