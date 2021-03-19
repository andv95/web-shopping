<?php

namespace App\Models\Admin;

use App\Models\Traits\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, BaseModel;

    protected $table = 'contacts';
    protected $casts = ['file'];
    protected $fillable = ['name', 'email', 'address', 'content', 'file'];
}
