<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreBooking extends Model
{
    use HasFactory;
    protected $table = 'pre-booking';

    protected $guarded = [];
}
