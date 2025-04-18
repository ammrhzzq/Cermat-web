<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'cert_type',
        'iso_num',
        'comp_name',
        'comp_address1',
        'comp_address2',
        'comp_address3',
        'comp_phone1',
        'comp_phone2',
        'reg_date',
        'issue_date',
        'exp_date',
    ];
   
}
