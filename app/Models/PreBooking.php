<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreBooking extends Model
{
    use HasFactory;
    protected $table = 'pre_bookings';

    protected $guarded = [];
    protected $fillable = ['user_id', 'product_id', 'name', 'phone_no', 'email_id', 'location', 'vehicle_name', 'vehicle_color', 'transaction_id', 'amount_paid', 'transaction_photo', 'status'];
}
