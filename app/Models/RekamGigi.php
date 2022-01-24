<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RekamGigi extends Authenticatable
{
    public $table = "odontogram_pasien";
    public $timestamps = false;
    protected $fillable = [
        'id','id_pasien','tanggal','gigi','kondisi','anamnesa','tindakan','pemeriksa'
    ];


}
