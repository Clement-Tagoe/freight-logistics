<?php

namespace App\Models;

use App\Models\Freight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function freight() 
    {
        return $this->hasMany(Freight::class);
    }
}
