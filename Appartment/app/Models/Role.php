<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';

    // Disable timestamps if they are not included in the table
    public $timestamps = false;

    // Protect the primary key and not allow mass assignment
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_role'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
