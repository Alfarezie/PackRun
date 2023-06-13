<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lacak;

class LacakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            Lacak::all()
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
    public function store(Request $request, $id_paket)
    {
        return response()->json([
            Lacak::updateOrCreate([
                'id_paket' => $id_paket
            ], 
                $request -> all()
            ),
            Lacak::find($id_paket)->Paket
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
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
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_paket)
    {
        //
    }
}
