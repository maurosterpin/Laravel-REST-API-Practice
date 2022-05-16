<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\imageManipulation;
use App\Http\Requests\StoreimageManipulationRequest;
use App\Http\Requests\UpdateimageManipulationRequest;

class \ImageManipulationController extends Controller
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
     * @param  \App\Http\Requests\StoreimageManipulationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreimageManipulationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function show(imageManipulation $imageManipulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateimageManipulationRequest  $request
     * @param  \App\Models\imageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateimageManipulationRequest $request, imageManipulation $imageManipulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imageManipulation  $imageManipulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageManipulation $imageManipulation)
    {
        //
    }
}
