<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplecorrAction extends Model
{
    use HasFactory;
    protected $fillable = [
        'the_id',
        'action_file'
    ];
}
