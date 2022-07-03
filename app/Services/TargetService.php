<?php

namespace App\Services;

use App\Http\Repositories\TargetRepository;

class TargetService
{

    /**
     * @var $targetRepository
     */
    protected $targetRepository;

    /**
     * PostService constructor.
     *
     * @param TargetRepository $targetRepository
     */
    public function __construct(TargetRepository $targetRepository)
    {
        $this->targetRepository = $targetRepository;
    }

    /**
     * Get all post.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->targetRepository->getAll();
    }
}
