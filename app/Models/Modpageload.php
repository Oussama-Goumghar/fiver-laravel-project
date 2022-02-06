<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modpageload extends Model
{
    use HasFactory;
    protected $fillable = [
       'correctiveaction',
       'riskmanagement',
       'objectives',
       'opportunity',
       'compliance',
       'enviaspects',
       'auditmanagement',
       'ohsrisk',
       'documentmanagement',
       'complaintmanagement',
       'contextmanagement',
       'vendormanagement',
       'incidentreport',
       'hse',
       'hr',
       'maintainance',
       'calibration',
       'occhealth',
       'wastemanagement',
       'nearmiss'
    ];
}
