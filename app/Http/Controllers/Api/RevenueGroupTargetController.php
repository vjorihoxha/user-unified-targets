<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RevenueGroupTarget\StoreRevenueGroupTargetRequest;
use App\Http\Requests\RevenueGroupTarget\UpdateRevenueGroupTargetRequest;
use App\Models\RevenueGroupTarget;

class RevenueGroupTargetController extends Controller
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
     * @param  \App\Http\Requests\RevenueGroupTarget\StoreRevenueGroupTargetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRevenueGroupTargetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RevenueGroupTarget  $revenueGroupTarget
     * @return \Illuminate\Http\Response
     */
    public function show(RevenueGroupTarget $revenueGroupTarget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RevenueGroupTarget  $revenueGroupTarget
     * @return \Illuminate\Http\Response
     */
    public function edit(RevenueGroupTarget $revenueGroupTarget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RevenueGroupTarget\UpdateRevenueGroupTargetRequest  $request
     * @param  \App\Models\RevenueGroupTarget  $revenueGroupTarget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRevenueGroupTargetRequest $request, RevenueGroupTarget $revenueGroupTarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RevenueGroupTarget  $revenueGroupTarget
     * @return \Illuminate\Http\Response
     */
    public function destroy(RevenueGroupTarget $revenueGroupTarget)
    {
        //
    }
}
