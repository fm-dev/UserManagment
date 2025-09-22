<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileManagement extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'path_file',
        'nama_file',
        'label_file',
        'created_by',
        'mode_by',
        'created_at',
        'mod_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'mod_at'     => 'datetime',
    ];
}
