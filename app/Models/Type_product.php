<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_product extends Model
{
    use HasFactory;

    protected $table = 'type_products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type_name'
    ];

    public function relasiToProduct()
    {
        return $this->hasMany('App\Models\Product', 'type_id', 'id');
        // return $this->belongsTo('App\Type', 'type_id','type_id');
    }
}
