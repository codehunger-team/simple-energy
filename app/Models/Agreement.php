<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'user_id', 'agreement_validity_time', 'agreement_date', 'registration_fee', 'stamp_duty_fee',
        'payable_amount'
    ];


    /**
     * This function is used to get the User record
     */

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
