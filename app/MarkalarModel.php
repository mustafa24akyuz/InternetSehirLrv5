<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkalarModel extends Model
{
    protected $table      = 'markalar';
    protected $primaryKey = 'markalar_id';
    public    $timestamps = true;
    protected $fillable   = ['marka','onay'];

    public function getMarkalar()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getMarka($Marka_Id)
    {
        $Where = array('markalar_id' => $Marka_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
