<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paket::all();
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
        return Paket::create($request -> all());
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
    public function update(Request $request, $id_paket)
    {
        $paket=Paket::find($id_paket);
        $paket->update($request->all());
        return $paket;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_paket)
    {
        $paket=Paket::find($id_paket);
        $paket->delete();
        return 'Success';
    }
}
