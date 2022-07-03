<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CallPurpose\StoreCallPurposeRequest;
use App\Http\Requests\CallPurpose\UpdateCallPurposeRequest;
use App\Models\CallPurpose;

class CallPurposeController extends Controller
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
     * @param  \App\Http\Requests\CallPurpose\StoreCallPurposeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCallPurposeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallPurpose  $callPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(CallPurpose $callPurpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CallPurpose\UpdateCallPurposeRequest  $request
     * @param  \App\Models\CallPurpose  $callPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCallPurposeRequest $request, CallPurpose $callPurpose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallPurpose  $callPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallPurpose $callPurpose)
    {
        //
    }
}
