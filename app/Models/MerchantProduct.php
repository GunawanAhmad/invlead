<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PresenceGroup;
use App\Models\Santri;
use App\Models\Merchant;

class MerchantProduct extends Model
{
    protected $fillable = [
        'merchant_id',
        'name',
        'price',
        'type'
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
}

