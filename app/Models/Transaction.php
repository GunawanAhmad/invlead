<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PresenceGroup;
use App\Models\Santri;
use App\Models\BankAccount;

class Transaction extends Model
{
    protected $fillable = [
        'source_account_id',
        'target_account_id',
        'id',
        'amount'
    ];

    public function targetAccount()
    {
        return $this->belongsTo(BankAccount::class, 'target_account_id');
    }
}

