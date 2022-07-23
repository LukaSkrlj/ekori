<?php

namespace App\Http\Controllers;

use App\Models\EmailCount;
use App\Http\Requests\StoreEmailCountRequest;
use App\Http\Requests\UpdateEmailCountRequest;

class EmailCountController extends Controller
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
     * @param  \App\Http\Requests\StoreEmailCountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailCountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailCount  $emailCount
     * @return \Illuminate\Http\Response
     */
    public function show(EmailCount $emailCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailCount  $emailCount
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailCount $emailCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailCountRequest  $request
     * @param  \App\Models\EmailCount  $emailCount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailCountRequest $request, EmailCount $emailCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailCount  $emailCount
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailCount $emailCount)
    {
        //
    }
}
