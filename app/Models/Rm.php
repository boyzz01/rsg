<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rm extends Authenticatable
{
    public $table = "riwayat_medis";
    public $timestamps = false;
    protected $fillable = [
        'id','id_trans','id_pasien','gol','res','td','pj','asma','diabetes','haemo','hepa','gas','pl','alergi_obat','alergi_makanan','tgl'
    ];


}
