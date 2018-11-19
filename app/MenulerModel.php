<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenulerModel extends Model
{
    protected $table      = 'menuler';
    protected $primaryKey = 'menuler_id';
    public    $timestamps = true;
    protected $fillable   = ['menu_id','menu','icon','resim','icerik_turu','menu_linki','target','sira','onay'];

    public function getMenuler()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getMenu($Birim_Id)
    {
        $Where = array('menuler_id' => $Birim_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
