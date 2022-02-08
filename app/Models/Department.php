<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'departmentname',
        'hod',
        'code',
        'hodname',
        'hod_assistants',
        'icon',
        'isoclauses',
        'is_deleted'
    ];
}
