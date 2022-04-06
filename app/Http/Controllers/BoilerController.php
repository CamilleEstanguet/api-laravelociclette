<?php

namespace App\Http\Controllers;

use App\Models\Boiler;
use Illuminate\Http\Request;

class BoilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BoilerResource::collection(Boiler::paginate());
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
        Boiler::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function show(Boiler $boiler)
    {
        return new BoilerResource($boiler);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boiler $boiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boiler  $boiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boiler $boiler)
    {
        Boiler::create($boiler);
    }
}
