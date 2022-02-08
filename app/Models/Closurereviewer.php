<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Closurereviewer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email'
    ];
}
