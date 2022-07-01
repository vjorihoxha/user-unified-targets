<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneCall\StorePhoneCallRequest;
use App\Http\Requests\PhoneCall\UpdatePhoneCallRequest;
use App\Models\PhoneCall;

class PhoneCallController extends Controller
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
     * @param  \App\Http\Requests\PhoneCall\StorePhoneCallRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneCallRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneCall  $phoneCall
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneCall $phoneCall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneCall  $phoneCall
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneCall $phoneCall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PhoneCall\UpdatePhoneCallRequest  $request
     * @param  \App\Models\PhoneCall  $phoneCall
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoneCallRequest $request, PhoneCall $phoneCall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneCall  $phoneCall
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneCall $phoneCall)
    {
        //
    }
}
