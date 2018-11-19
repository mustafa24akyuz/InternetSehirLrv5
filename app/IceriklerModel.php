<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IceriklerModel extends Model
{
    protected $table      = 'icerikler';
    protected $primaryKey = 'icerikler_id';
    public    $timestamps = true;
    protected $fillable   = ['menuler_id','baslik','aciklama','taglar','sira','onay'];

    public function getIcerikler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getIcerik($Icerik_Id)
    {
        $Where = array('icerikler_id' => $Icerik_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
