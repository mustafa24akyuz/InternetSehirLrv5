<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunTakipModel extends Model
{
    protected $table      = 'urun_takip';
    protected $primaryKey = 'urun_takip_id';
    public    $timestamps = true;
    protected $fillable   = ['urunler_id','uyeler_id','tarih','onay'];

    public function getUrunTakipler($Uye_Id = 0)
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getUrunTakip($Takip_Id, $Uye_Id = 0)
    {
        $Where = array('urun_takip_id' => $Takip_Id, 'uyeler_id' => $Uye_Id);
        return $this->where($Where)->get()->first();
    }
}
