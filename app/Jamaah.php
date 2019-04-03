<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model 
{
    protected $fillable = [
        'numbering',
        'id',
        'customer',
        'birth_date',
        'birth_city',
        'phone_number',
        'email',
        'c_address',
        'id_jamaah',
        'ktp_detail',
        'power_of_attorney_detail',
        'amount'
    ];
}
