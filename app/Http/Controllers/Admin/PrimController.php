<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prim;
use App\Models\Shipment;
use App\Models\Tracking;
use Illuminate\Http\Request;

class PrimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
     * @param  \App\Models\Prim  $prim
     * @return \Illuminate\Http\Response
     */
    public function show(Prim $prim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prim  $prim
     * @return \Illuminate\Http\Response
     */
    public function edit(Prim $prim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prim  $prim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prim $prim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prim  $prim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prim $prim)
    {
        //
    }

    /**
     * @author Tantan
     * @description Search Connote in Compro
     * @created 16 Sep 2021
     */
    public function checkAwb(Request $request, Shipment $shipment)
    {

        $search     = $request->searching;

        $getData    = Tracking::join('shipment', 'tracking_shipment.shipment_id', '=', 'shipment.id')
            ->select('tracking_shipment.status_eng AS status_eng','tracking_shipment.track_time AS tracktime')
            ->where('shipment.connote', '=', $search)
            ->orWhere('shipment.redoc_connote', '=', $search)
            ->orderBy('track_time','DESC')
            ->get();

        return response($getData);

        // dd($getData);

        // if ($getData) {
        //     return view('pages.index', compact('getData'));
        // } else {
        //     return "Gagal";
        // }
    }
}
