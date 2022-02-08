<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Corrective extends Model
{
    use HasFactory;

    protected $appends = ["created_at", "updated_at"];
    protected $fillable = [
      'count',
      'issueid',
      'category',
      'type',
      'department',
      'title',
      'file',
      'action_file',
      'observation',
      'duedate',
      'year',
      'agreedaction',
      'rootcause',
      'correctiveaction',
      'correction',
      'status',
      'postedby',
      'responsibility',
      'notification',
      'processstage',
      'approvement',
      'impl_status',
      'remarks',
      'action_remarks',
      'closed',
      'active',
      'approvedby',
      'updated_to_100_by',
      'reviewed_action_by',
      'proposedby',
      'closedby',
      'frequency',
      'Monthlyfreq',
      'Weeklyfreq',
      'Dayfreq',
      'incident_id',
      'updated_to_100_at',
      'reviewed_action_at',
      'proposed_at',
      'reviewed_at'
    ];
    public function getCreatedAtAttribute($date)
    {
        if ($date != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d h:i:s', strtotime($date)))->format('d-m-Y h:i:s A');
        }
    }
    public function getUpdatedAtAttribute($date)
    {
        if ($date != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d h:i:s', strtotime($date)))->format('d-m-Y h:i:s A');
        }
    }
    public function cat()
    {
        return $this->belongsTo('App\Models\Category', 'category', 'id')->where('is_deleted', false);
    }
    public function typ()
    {
        return $this->belongsTo('App\Models\Type', 'type', 'id');
    }
    public function dep()
    {
        return $this->belongsTo('App\Models\Department', 'department', 'id');
    }
    public function postedByCorrective()
    {
        return $this->belongsTo('App\Models\User', 'postedby', 'employeeid');
    }
    public function approvedByCorrective()
    {
        return $this->belongsTo('App\Models\User', 'approvedby', 'employeeid');
    }
    public function closedByCorrective()
    {
        return $this->belongsTo('App\Models\User', 'closedby', 'employeeid');
    }

}
