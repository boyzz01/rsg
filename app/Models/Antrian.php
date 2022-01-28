<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Antrian extends Authenticatable
{
    public $table = "antrian_pasien";
    public $timestamps = false;
    protected $fillable = [
        'id_pasien','mulai_antri','akhir_antri','status','keluhan','dokter_p'
    ];


}
