<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KargolarModel extends Model
{
    protected $table      = 'kargolar';
    protected $primaryKey = 'kargolar_id';
    public    $timestamps = true;
    protected $fillable   = ['kargo','webadresi','takip_linki','tarih','sira','onay'];

    public function getKargolar()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getKargo($Kargo_Id)
    {
        $Where = array('kargolar_id' => $Kargo_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
