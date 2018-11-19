<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OzelliklerModel extends Model
{
    protected $table      = 'ozellikler';
    protected $primaryKey = 'ozellikler_id';
    public    $timestamps = true;
    protected $fillable   = ['ozellik','data_tipi','materyaller_grup_id','onay'];

    public function getOzellikler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getOzellik($Ozellik_Id)
    {
        $Where = array('ozellikler_id' => $Ozellik_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
