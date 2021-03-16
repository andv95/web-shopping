<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'exchange_rates';
    protected $fillable = ['name', 'exchange'];
}
