<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DovizKurlariModel extends Model
{
    protected $table      = 'doviz_kurlari';
    protected $primaryKey = 'doviz_kurlari_id';
    public    $timestamps = true;
    protected $fillable   = ['para_birimleri_id','kur','onay'];

    public function getDovizKurlari()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getDovizKuru($Doviz_Id)
    {
        $Where = array('doviz_kurlari_id' => $Doviz_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
