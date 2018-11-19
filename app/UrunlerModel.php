<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunlerModel extends Model
{
    protected $table      = 'urunler';
    protected $primaryKey = 'urunler_id';
    public    $timestamps = true;
    protected $fillable   = ['kategoriler_id','markalar_id','urun','tedarik_suresi','aktuel_urun','yeni_urun','indirimli','vitrin','ozel_urun',
        'fiyat','eski_fiyat','para_birimleri_id','kdv_orani','fiyata_kdv_dahil','stok_sinirsiz','stok','birimler_id','yeni_ikinciel','aciklama','taglar',
        'resim1','resim2','resim3','resim4','resim5','sira','onay'];

    public function getUrunler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getUrun($Urun_Id)
    {
        $Where = array('urunler_id' => $Urun_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}