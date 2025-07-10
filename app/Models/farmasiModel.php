<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farmasiModel extends Model
{
    use HasFactory;

    protected $table = "farmasi";
    protected $primaryKey ="id";
}
