<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OzelliklerMateryallerModel extends Model
{
    protected $table      = 'ozellikler_materyaller';
    protected $primaryKey = 'ozellikler_materyaller_id';
    public    $timestamps = true;
    protected $fillable   = ['ozellikler_id','key','value','sira','onay'];

    public function getOzelliklerMateryaller()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getOzellikMateryal($Ozellik_Materyal_Id)
    {
        $Where = array('ozellikler_materyaller_id' => $Ozellik_Materyal_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
