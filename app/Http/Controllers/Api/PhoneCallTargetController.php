<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneCallTarget\StorePhoneCallTargetRequest;
use App\Http\Requests\PhoneCallTarget\UpdatePhoneCallTargetRequest;
use App\Models\PhoneCallTarget;

class PhoneCallTargetController extends Controller
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
     * @param  \App\Http\Requests\PhoneCallTarget\StorePhoneCallTargetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneCallTargetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneCallTarget  $phoneCallTarget
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneCallTarget $phoneCallTarget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneCallTarget  $phoneCallTarget
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneCallTarget $phoneCallTarget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PhoneCallTarget\UpdatePhoneCallTargetRequest  $request
     * @param  \App\Models\PhoneCallTarget  $phoneCallTarget
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoneCallTargetRequest $request, PhoneCallTarget $phoneCallTarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneCallTarget  $phoneCallTarget
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneCallTarget $phoneCallTarget)
    {
        //
    }
}
