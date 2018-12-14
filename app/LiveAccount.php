<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveAccount extends Model
{
    protected $fillable = [
        'currency','account_type','leverage','name', 'user_name', 'email','address','city','country', 'phone_number', 'password',
    ];
}
