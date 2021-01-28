<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'ref_code',
        'prod_img',
        'price',
        'prod_name',
        'prod_description',
        'prod_rating'
    ];
}
