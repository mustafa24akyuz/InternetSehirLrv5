<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerlerModel extends Model
{
    protected $table      = 'bannerler';
    protected $primaryKey = 'bannerler_id';
    public    $timestamps = true;
    protected $fillable   = ['banner_tipi_id','banner','baslik','aciklama','button','dosya','url','target','baslama_tarihi','bitis_tarihi','gorunme_sayisi','tiklanma_sayisi','sira','onay'];

    public function getBannerler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getBanner($Banner_Id)
    {
        $Where = array('bannerler_id' => $Banner_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
