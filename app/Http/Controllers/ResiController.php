<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class ResiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($no_resi)
    {
        return response()->json([
            Paket::where('no_resi', '=', $no_resi)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $no_resi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_paket)
    {
        $paket=Paket::find($id_paket);
        $paket->update(['no_resi'=>null]);
        return response()->json([
            'Success'
        ]);
    }
}
