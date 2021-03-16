<?php

namespace App\Models;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperties extends Model
{
    use HasFactory, BaseModel;
    protected $table = 'product_property';
    protected $casts = ['image'];
    protected $fillable = ['product_id', 'color_id', 'size_id', 'image', 'description', 'description_en', 'quantity'];
}
