<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Monetary\StoreMonetaryRequest;
use App\Http\Requests\Monetary\UpdateMonetaryRequest;
use App\Models\Monetary;

class MonetaryController extends Controller
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
     * @param  \App\Http\Requests\Monetary\StoreMonetaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonetaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monetary  $monetary
     * @return \Illuminate\Http\Response
     */
    public function show(Monetary $monetary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Monetary\UpdateMonetaryRequest  $request
     * @param  \App\Models\Monetary  $monetary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonetaryRequest $request, Monetary $monetary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monetary  $monetary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monetary $monetary)
    {
        //
    }
}
