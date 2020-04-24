<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    //inisialisasi tabel
    protected $table = 'tb_data';
    protected $fields = ['Nim','Nama','Jk',"Hobi"];
}
