<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
    protected $table = 'Password_resets';

    public $timestamps = false;

    public $fillable =['email','token','password'];
}
