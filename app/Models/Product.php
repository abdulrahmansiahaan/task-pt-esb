<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type_id',
        'description',
        'price'
    ];

    public function relasiToTypeProduct()
    {
        return $this->hasMany('App\Models\Type_product', 'id', 'type_id');
    }
}
