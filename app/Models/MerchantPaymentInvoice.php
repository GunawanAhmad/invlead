<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PresenceGroup;
use App\Models\Santri;
use App\Models\MerchantProduct;

class MerchantPaymentInvoice extends Model
{
    protected $fillable = [
        'code',
        'id',
        'price',
        'merchant_product_id'
    ];

    public function merchantProduct()
    {
        return $this->belongsTo(MerchantProduct::class, 'merchant_product_id');
    }
}

