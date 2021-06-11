<?php

namespace App\Http\Controllers;

use App\Models\Specialities;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
        ]);

        Specialities::create($request->all());

        return redirect()->route('specialities.index')
            ->with('success', 'Specialities created succefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialities  $specialities
     * @return \Illuminate\Http\Response
     */
    public function show(Specialities $specialities)
    {
        return view('specialities.show', compact('specialities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialities  $specialities
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialities $specialities)
    {
        return view('specialities.edit', compact('specialities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialities  $specialities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialities $specialities)
    {
        $request->validate([
            'names' => 'required',
        ]);

        $specialities->update($request->all());

        return redirect()->route('specialities.index')
            ->with('success', 'Specialities updated succefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialities  $specialities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialities $specialities)
    {
        $specialities->delete();

        return redirect()->route('specialities.index')
            ->with('success', 'Specialities deleted successfully');
    }
}
