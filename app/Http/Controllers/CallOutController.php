<?php

namespace App\Http\Controllers;

use App\Models\CallOut;
use Illuminate\Http\Request;

class CallOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CallOutResource::collection(CallOut::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validated();
        CallOut::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallOut  $callOut
     * @return \Illuminate\Http\Response
     */
    public function show(CallOut $callOut)
    {
        return new CallOutResource($callOut);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallOut  $callOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CallOut $callOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallOut  $callOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallOut $callOut)
    {
        //
    }
}
