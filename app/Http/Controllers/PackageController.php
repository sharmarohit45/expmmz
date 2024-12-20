<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package; // Assuming you have a Package model

class PackageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */

    public function index()
    {
        $packages = Package::all(); // Fetch all trek packages from the database
        return view('admin.adminPackageList', compact('packages')); // Pass the trek data to the view
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'trek_heading' => 'required|string|max:255',
            'about_trek' => 'required|string',
            'location' => 'required|string',
            'altitude' => 'required|string',
            'difficulty' => 'required|string',
            'best_time_to_visit' => 'required|string',
            'base_camp' => 'required|string',
            'duration' => 'required|string',
            'route' => 'required|array',
            'key_attraction' => 'required|array',
            'preparation_tips' => 'required|array',
            'how_to_reach' => 'required|array',
            'images' => 'nullable|array',
            'trek_times_season' => 'required|string',
            'trek_times_months' => 'required|string',
        ]);

        // Store the trek data in the Package model
        $package = new Package();
        $package->trek_heading = $validatedData['trek_heading'];
        $package->about_trek = $validatedData['about_trek'];
        $package->location = $validatedData['location'];
        $package->altitude = $validatedData['altitude'];
        $package->difficulty = $validatedData['difficulty'];
        $package->best_time_to_visit = $validatedData['best_time_to_visit'];
        $package->base_camp = $validatedData['base_camp'];
        $package->duration = $validatedData['duration'];
        $package->route = json_encode($validatedData['route']); // Storing array as JSON
        $package->key_attraction = json_encode($validatedData['key_attraction']);
        $package->preparation_tips = json_encode($validatedData['preparation_tips']);
        $package->how_to_reach = json_encode($validatedData['how_to_reach']);
        $package->trek_times_season = $validatedData['trek_times_season'];
        $package->trek_times_months = $validatedData['trek_times_months'];

        // Handle file uploads for images
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                $images[] = $path;
            }
            $package->images = json_encode($images);
        }

        // Save the package to the database
        $package->save();

        return redirect()->back()->with('success', 'Trek package created successfully!');
    }
    // Show the edit form
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        // Decode JSON attributes for use in the edit form
        $package->route = json_decode($package->route, true);
        $package->key_attraction = json_decode($package->key_attraction, true);
        $package->preparation_tips = json_decode($package->preparation_tips, true);
        $package->how_to_reach = json_decode($package->how_to_reach, true);
        $images = json_decode($package->images, true) ?? []; // Decode images JSON

        return view('admin.edit', compact('package'));
    }

    // Update the trek details
    public function update(Request $request, $id)
    {
        $request->validate([
            'trek_heading' => 'required|string|max:255',
            'about_trek' => 'required|string',
            'location' => 'required|string|max:255',
            'altitude' => 'required|numeric',
            'difficulty' => 'required|string',
            'best_time_to_visit' => 'required|string',
            'base_camp' => 'required|string',
            'duration' => 'required|string',
            'route' => 'required|array',
            'key_attraction' => 'required|array',
            'preparation_tips' => 'required|array',
            'how_to_reach' => 'required|array',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'trek_times_season' => 'required|string',
            'trek_times_months' => 'required|string',
        ]);

        $package = Package::findOrFail($id);

        // Update the package attributes
        $package->trek_heading = $request->input('trek_heading');
        $package->about_trek = $request->input('about_trek');
        $package->location = $request->input('location');
        $package->altitude = $request->input('altitude');
        $package->difficulty = $request->input('difficulty');
        $package->best_time_to_visit = $request->input('best_time_to_visit');
        $package->base_camp = $request->input('base_camp');
        $package->duration = $request->input('duration');
        $package->route = json_encode($request->input('route'));
        $package->key_attraction = json_encode($request->input('key_attraction'));
        $package->preparation_tips = json_encode($request->input('preparation_tips'));
        $package->how_to_reach = json_encode($request->input('how_to_reach'));
        $package->trek_times_season = $request->input('trek_times_season');
        $package->trek_times_months = $request->input('trek_times_months');

        // Handle file uploads for images
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('public/images');
            }
            $package->images = json_encode($images);
        }

        // Save the updated package to the database
        $package->save();

        return redirect()->route('packages.index')->with('success', 'Trek updated successfully.');
    }
}
