<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PresenceGroup;
use App\Models\Santri;
use App\Models\User;

class BankAccount extends Model
{
    protected $fillable = [
        'owner_id',
        'balance',
        'id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}

