<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankalarModel extends Model
{
    protected $table      = 'bankalar';
    protected $primaryKey = 'bankalar_id';
    public    $timestamps = true;
    protected $fillable   = ['banka','iban','sube_adi','sube_kodu','hesap_no','hesap_sahibi','sira','onay'];

    public function getBankalar()
    {
        return $this->where(array('onay' => '1'))->get();
    }

    public function getBanka($Banka_Id)
    {
        $Where = array('bankalar_id' => $Banka_Id, 'onay' => '1');
        return $this->where($Where)->get()->first();
    }
}
