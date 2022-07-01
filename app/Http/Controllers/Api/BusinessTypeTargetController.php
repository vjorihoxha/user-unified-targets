<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessTypeTarget\StoreBusinessTypeTargetRequest;
use App\Http\Requests\BusinessTypeTarget\UpdateBusinessTypeTargetRequest;
use App\Models\BusinessTypeTarget;

class BusinessTypeTargetController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BusinessTypeTarget\StoreBusinessTypeTargetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessTypeTargetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessTypeTarget  $businessTypeTarget
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessTypeTarget $businessTypeTarget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessTypeTarget  $businessTypeTarget
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessTypeTarget $businessTypeTarget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BusinessTypeTarget\UpdateBusinessTypeTargetRequest  $request
     * @param  \App\Models\BusinessTypeTarget  $businessTypeTarget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessTypeTargetRequest $request, BusinessTypeTarget $businessTypeTarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessTypeTarget  $businessTypeTarget
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessTypeTarget $businessTypeTarget)
    {
        //
    }
}
