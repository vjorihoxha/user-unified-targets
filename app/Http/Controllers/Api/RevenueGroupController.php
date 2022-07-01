<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RevenueGroup\StoreRevenueGroupRequest;
use App\Http\Requests\RevenueGroup\UpdateRevenueGroupRequest;
use App\Models\RevenueGroup;

class RevenueGroupController extends Controller
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
     * @param  \App\Http\Requests\RevenueGroup\StoreRevenueGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenueGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RevenueGroup  $revenueGroup
     * @return \Illuminate\Http\Response
     */
    public function show(RevenueGroup $revenueGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RevenueGroup  $revenueGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(RevenueGroup $revenueGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RevenueGroup\UpdateRevenueGroupRequest  $request
     * @param  \App\Models\RevenueGroup  $revenueGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenueGroupRequest $request, RevenueGroup $revenueGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RevenueGroup  $revenueGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevenueGroup $revenueGroup)
    {
        //
    }
}
