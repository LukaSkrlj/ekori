<?php

namespace App\Http\Controllers;

use App\Models\GarbageCollector;
use App\Http\Requests\StoreGarbageCollectorRequest;
use App\Http\Requests\UpdateGarbageCollectorRequest;

class GarbageCollectorController extends Controller
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
     * @param  \App\Http\Requests\StoreGarbageCollectorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGarbageCollectorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GarbageCollector  $garbageCollector
     * @return \Illuminate\Http\Response
     */
    public function show(GarbageCollector $garbageCollector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GarbageCollector  $garbageCollector
     * @return \Illuminate\Http\Response
     */
    public function edit(GarbageCollector $garbageCollector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGarbageCollectorRequest  $request
     * @param  \App\Models\GarbageCollector  $garbageCollector
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGarbageCollectorRequest $request, GarbageCollector $garbageCollector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GarbageCollector  $garbageCollector
     * @return \Illuminate\Http\Response
     */
    public function destroy(GarbageCollector $garbageCollector)
    {
        //
    }
}
