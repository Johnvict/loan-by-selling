<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable = [
        "product_id",
        "price",
        "date",
        "modified_by",
    ];
}
