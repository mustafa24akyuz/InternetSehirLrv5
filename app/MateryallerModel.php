<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateryallerModel extends Model
{
    protected $table      = 'materyaller';
    protected $primaryKey = 'materyaller_id';
    public    $timestamps = true;
    protected $fillable   = ['grup_id','grup_adi','key','value','sira','onay'];

    public function getMateryaller()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getMateryal($Birim_Id)
    {
        $Where = array('materyaller_id' => $Birim_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
