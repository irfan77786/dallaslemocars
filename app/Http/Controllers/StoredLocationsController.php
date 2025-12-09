<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoredLocation;

class StoredLocationsController extends Controller
{
    /**
     * Display list of stored locations.
     */
    public function index()
    {
        $locations = StoredLocation::orderBy('id', 'desc')->get();
        return view('storedLocations.index', compact('locations'));
    }

    /**
     * Show create location form.
     */
    public function create()
    {
        return view('storedLocations.create');
    }

    /**
     * Store a new location.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address_type' => 'required|in:home,other',
            'address'      => 'required|string',
            'apt_suite'    => 'nullable|string',
            'location_label' => 'required_if:address_type,other',
        ]);

        StoredLocation::create([
            'address_type' => $request->address_type,
            'address'      => $request->address,
            'apt_suite'    => $request->apt_suite,
            'location_label' => isset($request->location_label) ? $request->location_label : null,
        ]);

        return redirect()->route('storedLocations.index')
        ->with('success', 'Location added successfully');
    }

    /**
     * Show edit form.
     */
    public function edit($id)
    {
        $location = StoredLocation::findOrFail($id);
        return view('storedLocations.edit', compact('location'));
    }

    /**
     * Update a location.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address_type' => 'required|in:home,other',
            'address'      => 'required|string',
            'apt_suite'    => 'nullable|string',
            'location_label' => 'required_if:address_type,other',
        ]);

        $location = StoredLocation::findOrFail($id);

        $location->update([
            'address_type' => $request->address_type,
            'address'      => $request->address,
            'apt_suite'    => $request->apt_suite,
            'location_label' => isset($request->location_label) ? $request->location_label : null,
        ]);

        return redirect()->route('storedLocations.index')
                         ->with('success', 'Location updated successfully');
    }

    /**
     * Delete a location.
     */
    public function destroy($id)
    {
        $location = StoredLocation::findOrFail($id);
        $location->delete();

        return redirect()->route('storedLocations.index')
                         ->with('success', 'Location deleted successfully');
    }
}
