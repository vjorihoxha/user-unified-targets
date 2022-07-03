<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Numeric\StoreNumericRequest;
use App\Http\Requests\Numeric\UpdateNumericRequest;
use App\Models\Numeric;

class NumericController extends Controller
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
     * @param  \App\Http\Requests\Numeric\StoreNumericRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNumericRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Numeric  $numeric
     * @return \Illuminate\Http\Response
     */
    public function show(Numeric $numeric)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Numeric\UpdateNumericRequest  $request
     * @param  \App\Models\Numeric  $numeric
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNumericRequest $request, Numeric $numeric)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Numeric  $numeric
     * @return \Illuminate\Http\Response
     */
    public function destroy(Numeric $numeric)
    {
        //
    }
}
