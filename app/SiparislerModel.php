<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiparislerModel extends Model
{
    protected $table      = 'siparisler';
    protected $primaryKey = 'siparisler_id';
    public    $timestamps = true;
    protected $fillable   = ['uyeler_id','odeme_sekli','bankalar_id','kargolar_id','kargo_no','aciklama','tarih','onay'];

    public function getSiparisler($Uye_Id = 0)
    {
        return $this->where(array('uyeler_id' => $Uye_Id))->get();
    }
}
