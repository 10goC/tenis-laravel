<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourtRequest;
use App\Http\Requests\UpdateCourtRequest;
use App\Models\Court;
use Illuminate\Http\RedirectResponse;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('courts.list', ['courts' => Court::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourtRequest $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:courts,name|max:255',
        ]);
        $court = new Court();
        $court->name = $request->name;
        $court->save();
        return redirect()->route('courts.index')->with('success', 'Court added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Court $court)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Court $court)
    {
        return view('courts.edit', ['court' => $court]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourtRequest $request, Court $court)
    {
        $request->validate([
            'name' => 'required|unique:courts,name,' . $court->id . '|max:255',
        ]);
        $court->name = $request->name;
        $court->save();
        return redirect()->route('courts.index')->with('success', 'Court updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Court $court)
    {
        $court->delete();
        return redirect()->route('courts.index')->with('success', 'Court deleted!');
    }
}
