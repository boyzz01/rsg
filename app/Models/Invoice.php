<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Invoice extends Authenticatable
{
    public $table = "invoice";
    public $timestamps = false;
    protected $primaryKey = 'id_invoice';
    protected $fillable = [
      'id_trans','id_pasien','total','status'
    ];


}
