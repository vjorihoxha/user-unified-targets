<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TargetType\StoreTargetTypeRequest;
use App\Http\Requests\TargetType\UpdateTargetTypeRequest;
use App\Models\TargetType;

class TargetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TargetType\StoreTargetTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTargetTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TargetType  $targetType
     * @return \Illuminate\Http\Response
     */
    public function show(TargetType $targetType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TargetType\UpdateTargetTypeRequest  $request
     * @param  \App\Models\TargetType  $targetType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTargetTypeRequest $request, TargetType $targetType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TargetType  $targetType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TargetType $targetType)
    {
        //
    }
}
