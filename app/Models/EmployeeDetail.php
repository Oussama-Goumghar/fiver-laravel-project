<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;
    protected $fillable = [
      'emp_number',
      'emp_name',
      'emp_position',
      'emp_department',
      'joining_date',
      'emp_dob'
    ];
    public function department()
    {
        return $this->hasOne('App\Models\Department', 'id', 'emp_departments_id');
    }
}
