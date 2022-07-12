<?php

namespace App\Http\Controllers;

use App\Models\Networks;
use Illuminate\Http\Request;

class NetworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $networks = Networks::get();
        return view('/mentor/networks', ['networks' => $networks]);
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
     * @param  \App\Models\Networks  $networks
     * @return \Illuminate\Http\Response
     */
    public function show(Networks $networks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Networks  $networks
     * @return \Illuminate\Http\Response
     */
    public function edit(Networks $networks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Networks  $networks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Networks $networks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Networks  $networks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Networks $networks)
    {
        //
    }
}
