<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Viewlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'last_login_date',
        'last_ip',
        'type',
        'last_login_time',
        'browser',
        'device'
    ];
    protected $appends = ["last_login_date", "last_login_time"];
    public function getLastLoginDateAttribute($date)
    {
        if ($date != null) {
            return Carbon::createFromFormat('Y-m-d', date('Y-m-d', strtotime($date)))->format('d-m-Y');
        }
    }
    public function getLastLoginTimeAttribute($date)
    {
        if ($date != null) {
            return Carbon::createFromFormat('H:i:s', date('h:i:s', strtotime($date)))->format('g:i A');
        }
    }
}
