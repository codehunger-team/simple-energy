<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealership extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['f_name', 'name', 'mobile', 'email', 'city', 'state', 'address', 'pincode', 'rent', 'locality', 'turnover', 'experience'];
}