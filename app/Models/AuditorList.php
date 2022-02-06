<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditorList extends Model
{
    use HasFactory;
    protected $table = 'auditorlists';
    protected $fillable = [
        'user_id',
        'education',
        'edu_file',
        'experience',
        'exp_file',
        'audit_exp',
        'auditexp_file',
        'certificate',
        'ceft_file',
        'is_deleted'
     ];

     public function useraudlist()
     {
         return $this->belongsTo('App\Models\User', 'user_id', 'id');
     }

}
