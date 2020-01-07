<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table ="kategori";
    protected $primarykey ='id';
    protected $fillable =['id','namakategori','jumlah'];
}
 