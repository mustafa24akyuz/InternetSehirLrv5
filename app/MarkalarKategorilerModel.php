<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkalarKategorilerModel extends Model
{
    protected $table      = 'markalar_kategoriler';
    protected $primaryKey = 'markalar_kategoriler_id';
    public    $timestamps = true;
    protected $fillable   = ['markalar_id','kategoriler_id','sira','onay'];

    public function getMarkalarKategoriler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getMarkaKategori($Marka_Id)
    {
        $Where = array('markalar_kategoriler_id' => $Marka_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
