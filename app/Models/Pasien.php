<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pasien extends Authenticatable
{
    public $table = "biodata_pasien";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama',
        'usia',
        'alamat',
        'hp',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'pekerjaan',
        'status_pernikahan',
        'tgl_kunjungan',
        'status'
    ];


}
