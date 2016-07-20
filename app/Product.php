<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    protected $fillable = ['pro_code','cate_id','name','url','image','images','price','price_company','price_origin','description','keywords','status','quantity','overview','specs','accessories','promotion','show_home'];
}
