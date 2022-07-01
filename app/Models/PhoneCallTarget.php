<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhoneCallTarget extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function numeric(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Numeric::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function callPurpose(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(CallPurpose::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phoneCalls(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PhoneCall::class);
    }
}
