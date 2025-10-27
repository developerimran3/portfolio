<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Teacher extends User
{
    protected $fillable = [
        "name",
        "username",
        "email",
        "phone",
        "degree",
        "password",
        "photo"

    ];
}
