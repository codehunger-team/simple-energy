<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const ADMIN_TYPE = 'admin';



    public function isAdmin()
    {
        return $this->user_type === self::ADMIN_TYPE;
    }

    protected $fillable = [
        'is_admin', 'role_id', 'name', 'last_name', 'email', 'password', 'father_name', 'mobile', 'dob', 'qualification', 'pan_number', 'aadhar_number', 'address', 'district', 'state', 'city', 'post_office', 'pincode', 'dealer_name', 'b_holder_name', 'b_account_no', 'b_ifsc_code', 'b_bank_name', 'b_branch_address', 'login_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        if (is_null($this->last_name)) {
            return "{$this->name}";
        }

        return "{$this->name} {$this->last_name}";
    }

    /**
     * Set the user's password.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
