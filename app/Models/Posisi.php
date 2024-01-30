<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Pagination\Paginator;

class Posisi extends Model
{
    use HasFactory;
    // use Paginator;

    protected $table = 'posisi';

    protected $fillable = [
        'n_posisi',
        'deskrip'
    ];
}
