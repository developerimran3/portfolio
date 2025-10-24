<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Student extends User
{
    protected $fillable = [
        "firstName",
        "lastName",
        "email",
        "password",
        "skill",
        "address",
        "phone",
        "photo",
    ];
}
