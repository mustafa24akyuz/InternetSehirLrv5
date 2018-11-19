<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiparislerDetayModel extends Model
{
    protected $table      = 'siparisler_detay';
    protected $primaryKey = 'siparisler_detay_id';
    public    $timestamps = true;
    protected $fillable   = ['siparisler_id','uyeler_id','urunler_id','miktar','fiyat','para_birimleri_id','tarih','onay'];

    public function getSiparislerDetay()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getSiparisDetayi($Siparis_Id, $Uye_Id = 0)
    {
        $Where = array('siparisler_detay_id' => $Siparis_Id, 'uyeler_id' => $Uye_Id);
        return $this->where($Where)->get()->first();
    }
}
