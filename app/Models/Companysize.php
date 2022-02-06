<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companysize extends Model
{
    use HasFactory;
    protected $fillable = [
       'compsize',
       'name',
       'email',
       'loginsperperson'
    ];
}
