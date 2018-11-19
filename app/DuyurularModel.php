<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuyurularModel extends Model
{
    protected $table      = 'duyurular';
    protected $primaryKey = 'duyurular_id';
    public    $timestamps = true;
    protected $fillable   = ['baslik','aciklama','onay'];

    public function getDuyurular()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getDuyuru($Duyuru_Id)
    {
        $Where = array('duyurular_id' => $Duyuru_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
