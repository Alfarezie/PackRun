<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ongkir;

class OngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            Ongkir::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            Ongkir::create($request -> all())
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ongkir $ongkir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ongkir $ongkir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ongkir $ongkir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ongkir $ongkir)
    {
        //
    }
}
