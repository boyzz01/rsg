<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Norm extends Authenticatable
{
    public $table = "no_rm";
    public $timestamps = false;
    protected $fillable = [
        'no','tgl'
    ];


}
