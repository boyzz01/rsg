<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rencana extends Authenticatable
{
    public $table = "rencana_perawatan";
    public $timestamps = false;
    protected $fillable = [
      'id_trans','id_pasien','diagnosa','perawatan','tgl','keterangan'
    ];


}
