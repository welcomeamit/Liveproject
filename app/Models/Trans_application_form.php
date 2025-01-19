<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trans_application_form extends Model
{
    public $timestamps = true;
    protected $table = 'trans_application_form';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'applicant_name',
        'father_name',
        'address',
        'po_ps',
        'district',
        'dob',
        'family_income',
        'cast',
        'sub_cast',
        'ration_card_no',
        'family_type',
        'created_at',
        'updated_at'
    ];



}
