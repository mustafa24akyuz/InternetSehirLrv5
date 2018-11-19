<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UyelerModel extends Model
{
    protected $table      = 'uyeler';
    protected $primaryKey = 'uyeler_id';
    public    $timestamps = true;
    protected $fillable   = ['diller_id','kullanici_adi','sifre','email','adi_soyadi','adi','soyadi','iller_id','ilceler_id','adres','posta_kodu','cep_telefonu','telefon_no','aktivasyon_kodu','ip_adresi','onay'];

    public function getUyeler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getUye($Uye_Id)
    {
        $Where = array('uyeler_id' => $Uye_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
