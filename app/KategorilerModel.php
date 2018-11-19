<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategorilerModel extends Model
{
    protected $table      = 'kategoriler';
    protected $primaryKey = 'kategoriler_id';
    public    $timestamps = true;
    protected $fillable   = ['kategori_id','kategori','taglar','sira','onay'];

    public function getKategoriler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getKategori($Kategori_Id)
    {
        $Where = array('kategoriler_id' => $Kategori_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}