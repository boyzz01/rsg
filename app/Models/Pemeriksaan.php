<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pemeriksaan extends Authenticatable
{
    public $table = "pemeriksaan";
    public $timestamps = false;
    protected $fillable = [
        'id_pasien','asimetris_wajah','relasi_bibir','tonus_bibir','tmj',
        'kelenjar_limfe','oklusi','torus_palatinus','torus_mandibularis',
        'palatum','diastema','gigi_anomali','d','m','f','komplikasi','anamnesa','tgl','dokter',
        'ket_oklusi','ket_torus_palatinus','ket_torus_mandibularis',
        'ket_palatum','ket_diastema','ket_gigi_anomali','lain_lain'
    ];


}
