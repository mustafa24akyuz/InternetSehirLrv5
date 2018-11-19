<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategorilerOzelliklerModel extends Model
{
    protected $table      = 'kategoriler_ozellikler';
    protected $primaryKey = 'kategoriler_ozellikler_id';
    public    $timestamps = true;
    protected $fillable   = ['kategoriler_id','ozellikler_id','onay'];

    public function getBirimler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getBirim($Birim_Id)
    {
        $Where = array('kategoriler_ozellikler_id' => $Birim_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
