<?php

namespace App\Http\Controllers\Admin;

use App\Models\Compro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Ongkir;
use Illuminate\Support\Facades\Redis;

class ComproController extends Controller
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
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function show(Compro $compro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function edit(Compro $compro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compro $compro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compro  $compro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compro $compro)
    {
        //
    }

    /**
     * @author Tantan
     * @description Cek Ongkir on Display
     * @param Request $request
     * @created 9 Okt 2021
     */
    public function cek_ongkir(Request $request)
    {
        return response(Ongkir::cek_ongkir($request));
    }
}