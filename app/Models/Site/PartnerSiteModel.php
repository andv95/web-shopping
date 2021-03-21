<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerSiteModel extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $fillable =['name', 'email', 'address', 'description', 'sub_price'];

    public function products(){
        return $this->hasMany(Product::class, 'partner');
    }
}
