<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;
    protected $table = 'user_permission';

    // Disable timestamps if they are not included in the table
    public $timestamps = false;

    // Protect the primary key and not allow mass assignment
    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'permission_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }
}
