<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Tindakan extends Authenticatable
{
    public $table = "master_tindakan";
    public $timestamps = false;
    protected $fillable = [
      'header','nama','biaya'
    ];


}
