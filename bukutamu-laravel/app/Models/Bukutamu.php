<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukutamu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bukutamu';

    protected $fillable = [
        'nama',
        'email',
        'website',
        'komentar'
    ];
}
