<?php

namespace App\Models;

use App\Models\Freight;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShippingLineRelease extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function freight() {
        return $this->belongsTo(Freight::class);
    }
}
