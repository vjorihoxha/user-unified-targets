<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CallPurpose extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phoneCallTargets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PhoneCallTarget::class);
    }
}
