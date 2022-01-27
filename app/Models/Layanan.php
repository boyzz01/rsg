<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Layanan extends Authenticatable
{
    public $table = "layanan";
    public $timestamps = false;
    protected $fillable = [
      'no_trans','id_tindakan','jumlah','id_pasien'
    ];


}
