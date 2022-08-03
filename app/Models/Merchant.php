<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PresenceGroup;
use App\Models\Santri;
use App\Models\MerchantProduct;

class Merchant extends Model
{
    protected $fillable = [
        'name',
        'owner_id',
    ];

    public function merchantProducts()
    {
        return $this->hasMany(MerchantProduct::class, 'merchant_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}

