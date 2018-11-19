<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrunlerOzelliklerModel extends Model
{
    protected $table      = 'urunler_ozellikler';
    protected $primaryKey = 'urunler_ozellikler_id';
    public    $timestamps = true;
    protected $fillable   = ['urunler_id','ozellikler_id','deger','stok','fiyat','onay'];

    public function getUrunlerOzellikler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getUrunOzellik($Birim_Id)
    {
        $Where = array('urunler_ozellikler_id' => $Birim_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
