<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs_Hobi extends Model
{
    //
    public $table = "mhs_hobi";
    protected $guarded = ['id'];

    public function getId()
    {
        return $this->id;
    }
}