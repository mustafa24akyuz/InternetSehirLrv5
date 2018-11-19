<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParaBirimleriModel extends Model
{
    protected $table      = 'para_birimleri';
    protected $primaryKey = 'para_birimleri_id';
    public    $timestamps = true;
    protected $fillable   = ['para_birimi','kisaltma','sira','onay'];

    public function getParaBirimleri()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getParaBirimi($ParaBirimi_Id)
    {
        $Where = array('para_birimleri_id' => $ParaBirimi_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
