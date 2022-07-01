<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RevenueGroup extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function revenueGroupTargets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RevenueGroupTarget::class);
    }
}
