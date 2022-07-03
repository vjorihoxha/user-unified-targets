<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Target\StoreTargetRequest;
use App\Http\Requests\Target\UpdateTargetRequest;
use App\Http\Resources\TargetResource;
use App\Models\Target;
use App\Services\TargetService;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TargetController extends Controller
{

    /**
     * @var targetService
     */
    protected $targetService;

    /**
     * TargetController Constructor
     *
     * @param TargetService $targetService
     *
     */
    public function __construct(TargetService $targetService)
    {
        $this->targetService = $targetService;
    }

    /**
     * Display a listing of the resource.
     * @apiResourceCollection App\Http\Resources\TargetResource
     * @apiResourceModel App\Models\Target
     * @return ResourceCollection
     */
    public function index()
    {
        //TODO: Unified logging and error handling
        return TargetResource::collection($this->targetService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Target\StoreTargetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTargetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show(Target $target)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Target\UpdateTargetRequest  $request
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTargetRequest $request, Target $target)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        //
    }
}
