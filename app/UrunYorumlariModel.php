<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunYorumlariModel extends Model
{
    protected $table      = 'urun_yorumlari';
    protected $primaryKey = 'urun_yorumlari_id';
    public    $timestamps = true;
    protected $fillable   = ['urunler_id','uyeler_id','puan','baslik','aciklama','tarih','onay'];

    public function getUrunYorumlari($Uye_Id = 0)
    {
        return $this->where(array('uyeler_id' => $Uye_Id))->get();
    }

    public function getUrunYorumu($Yorum_Id, $Uye_Id = 0)
    {
        $Where = array('urun_yorumlari_id' => $Yorum_Id, 'uyeler_id' => $Uye_Id);
        return $this->where($Where)->get()->first();
    }
}
