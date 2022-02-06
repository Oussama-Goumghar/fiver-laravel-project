<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Viewactivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'date', 'time', 'activity', 'type'
    ];
    protected $casts = [
        'date' => "date:d-m-Y",
        'time' => "time:g:i A"
    ];
    protected $appends = ["date", "time"];
    public function getDateAttribute($date)
    {
        if($date != null) {
           return Carbon::createFromFormat('Y-m-d', $date)->format('d-m-Y');
        }
    }
    public function getTimeAttribute($time)
    {
        if($time != null) {
           return Carbon::createFromFormat('H:i:s', $time)->format('g:i A');
        }
    }
}
