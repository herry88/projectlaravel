<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['nama_product','detail'];
}
