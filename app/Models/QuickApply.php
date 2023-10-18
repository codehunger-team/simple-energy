<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuickApply extends Model
{
    use HasFactory;
    protected $table = 'quick_apply';
    protected $guarded = [];

    public $timestamps = false;
}
