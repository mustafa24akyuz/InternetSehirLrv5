<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminlerModel extends Model
{
    protected $table      = 'adminler';
    protected $primaryKey = 'adminler_id';
    public    $timestamps = true;
    protected $fillable   = ['adi_soyadi','kullanici_adi','sifre','email','yetki_derecesi','onay'];
}
