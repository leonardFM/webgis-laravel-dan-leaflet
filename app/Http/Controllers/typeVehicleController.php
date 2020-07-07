<?php

namespace App\Http\Controllers;

use App\TypeVehicle;
use Illuminate\Http\Request;

class typeVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Tipe Kendaraan";
        $data = TypeVehicle::all();
        return view('type_vehicle.index', compact('title', 'data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function show(TypeVehicle $typeVehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeVehicle $typeVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeVehicle $typeVehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeVehicle  $typeVehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeVehicle $typeVehicle)
    {
        //
    }
}
