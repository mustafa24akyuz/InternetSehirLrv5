<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IllerModel extends Model
{
    protected $table      = 'iller';
    protected $primaryKey = 'iller_id';
    public    $timestamps = true;
    protected $fillable   = ['il','sef','modify_date','onay'];

    public function getIller()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getIl($Il_Id)
    {
        $Where = array('iller_id' => $Il_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
