<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_app extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'app_name',
        'role',
        'created_by',
        'updated_by',
        'status'
    ];
}
