<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SepetModel extends Model
{
    protected $table      = 'sepet';
    protected $primaryKey = 'sepet_id';
    public    $timestamps = true;
    protected $fillable   = ['uyeler_id','session_id','urunler_id','miktar','tarih','onay'];

    public function getSepet()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getSepetDetay($Sepet_Id)
    {
        $Where = array('sepet_id' => $Sepet_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
