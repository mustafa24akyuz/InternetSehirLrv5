<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DillerModel extends Model
{
    protected $table      = 'diller';
    protected $primaryKey = 'diller_id';
    public    $timestamps = true;
    protected $fillable   = ['dil','kisaltma','bayrak','sira','onay'];

    public function getDiller()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getDil($Dil_Id)
    {
        $Where = array('diller_id' => $Dil_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
