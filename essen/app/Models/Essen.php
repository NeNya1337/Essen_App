<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essen extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'essen_typen_id', 'kalorien'];
}
