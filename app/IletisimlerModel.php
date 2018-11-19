<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IletisimlerModel extends Model
{
    protected $table      = 'iletisimler';
    protected $primaryKey = 'iletisimler_id';
    public    $timestamps = true;
    protected $fillable   = ['uyeler_id','adi_soyadi','email','telefon_no','konu','mesaj','cevap','diller_id','ip_adresi','cevap_tarihi','tarih','onay'];

    public function getIletisimler($Uye_Id = 0)
    {
        return $this->where(array('uyeler_id' => $Uye_Id))->get();
    }

    public function getIletisim($Iletisim_Id, $Uye_Id = 0)
    {
        $Where = array('iletisimler_id' => $Iletisim_Id, 'uyeler_id' => $Uye_Id);
        return $this->where($Where)->get()->first();
    }
}
