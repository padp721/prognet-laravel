<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    //
    protected $guarded = ['id'];

    public function getNim()
    {
        return $this->nim;
    }
}
