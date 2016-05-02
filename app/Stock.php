<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use softDeletes;

    protected $table = 'stocks';
    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
}
