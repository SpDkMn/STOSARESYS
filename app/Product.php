<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use softDeletes;

  protected $table = 'products';
  protected $dates = ['deleted_at'];
  protected $fillable = ['codigo','nombre','precio_unitario','precio_docena'];

    public function stocks()
    {
        return $this->hasMany('App\Stock','product_id','id');
    }
}
