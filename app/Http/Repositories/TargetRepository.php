<?php

namespace App\Http\Repositories;

use App\Models\Target;

class TargetRepository
{
    /**
     * @var Target
     */
    protected $target;

    /**
     * TargetRepository constructor.
     *
     * @param Target $target
     */
    public function __construct(Target $target)
    {
        $this->target = $target;
    }

    /**
     * Get all targets.
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection $post
     */
    public function getAll()
    {
        return $this->target->with('user', 'targetType', 'monetaries.revenueGroupTargets.revenueGroup', 'monetaries.revenueGroupTargets.businessTypeTargets.businessType', 'numerics.phoneCallTargets.callPurpose')->get();
    }
}
