<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogRes extends Model
{
    use HasFactory;

    protected $table = 'log_res';
    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'pass'
    ];
}
