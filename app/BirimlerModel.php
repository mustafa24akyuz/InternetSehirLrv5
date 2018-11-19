<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirimlerModel extends Model
{
    protected $table      = 'birimler';
    protected $primaryKey = 'birimler_id';
    public    $timestamps = true;
    protected $fillable   = ['birim','kisaltma','sira','onay'];

    public function getBirimler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getBirim($Birim_Id)
    {
        $Where = array('birimler_id' => $Birim_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}