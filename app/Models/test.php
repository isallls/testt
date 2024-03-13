<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'nik',
        'phone_number',
        'address'
        // ''
    ];
    protected $hidden = [
        'remember'
    ];

    protected $guarded = [
        'email_verified_at' => 'datetime',
    ];
}
