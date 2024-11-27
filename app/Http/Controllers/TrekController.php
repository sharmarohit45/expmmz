<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Trek;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class TrekController extends Controller
{
    public function index()
    {
        $data = Trek::all();
        return view('admin.adminPackageList', compact('data'));
    }
    public function showDetail()
    {
        $data = Trek::all();
    
        // Decode and normalize image paths for each trek
        foreach ($data as $trek) {
            if (is_string($trek->image_paths)) {
                // Decode the JSON string into an array
                $trek->image_paths = json_decode($trek->image_paths, true);
    
                // Normalize the paths by replacing backslashes with forward slashes
                $trek->image_paths = array_map(function ($path) {
                    return str_replace('\\', '/', $path);
                }, $trek->image_paths);
    
                // Check if image paths are valid (not empty)
                if (empty($trek->image_paths)) {
                    // If no images exist, set a default image
                    $trek->image_paths = ['images/default-image.jpg'];
                }
            } else {
                // If image_paths is not a string, set a default image
                $trek->image_paths = ['images/default-image.jpg'];
            }
        }
    
        return view('trekDestination', compact('data'));
    }
    public function showDetails()
    {
        $reviews = Review::all();

        // Store reviews in session (optional)
        session(['reviews' => $reviews]);

        $data = Trek::all();
        // Decode and normalize image paths for each trek
        foreach ($data as $trek) {
            if (is_string($trek->image_paths)) {
                // Decode the JSON string into an array
                $trek->image_paths = json_decode($trek->image_paths, true);
    
                // Normalize the paths by replacing backslashes with forward slashes
                $trek->image_paths = array_map(function ($path) {
                    return str_replace('\\', '/', $path);
                }, $trek->image_paths);
    
                // Check if image paths are valid (not empty)
                if (empty($trek->image_paths)) {
                    // If no images exist, set a default image
                    $trek->image_paths = ['images/default-image.jpg'];
                }
            } else {
                // If image_paths is not a string, set a default image
                $trek->image_paths = ['images/default-image.jpg'];
            }
        }
    
        return view('homepage', compact('reviews', 'data'));
    }
    
    
    public function store(Request $request)
    {
        Log::info('Incoming request data===:', $request->all());

        try {
            $validated = $request->validate([
                'trek_heading' => 'required|string',
                'price' => 'required|string',
                'about_trek' => 'required|string',
                'location' => 'required|string',
                'altitude' => 'required|string',
                'difficulty' => 'required|string',
                'best_time_to_visit' => 'required|string',
                'base_camp' => 'required|string',
                'duration' => 'required|string',
                'route' => 'array',
                'key_attraction' => 'array',
                'preparation_tips' => 'array',
                'how_to_reach' => 'array',
                'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate image file
                'trek_times_season' => 'nullable|string',
                'trek_times_months' => 'nullable|string',
            ]);

            Log::info('Validated data:', $validated);

            // Handle image uploads
            $imagePaths = []; // Initialize array to hold image paths

            if ($request->hasFile('images')) {
                $propertyFolderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $validated['trek_heading']);
                $directoryPath = public_path("images/treks/{$propertyFolderName}");

                // Create directory if it doesn't exist
                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move($directoryPath, $imageName);
                        $imagePaths[] = "images/treks/{$propertyFolderName}/{$imageName}"; // Store image path as string
                    } else {
                        Log::error('Invalid image upload: ' . $image->getError());
                    }
                }
            }

            // Save trek data along with image paths
            Trek::create(array_merge($validated, [
                'image_paths' => json_encode($imagePaths), // Properly encode the array to JSON
            ]));

            Log::info('Submitted data:', array_merge($validated, ['image_paths' => $imagePaths]));
            return redirect()->route('treks.index')->with('success', 'Trek created successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors:', $e->errors());
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Error while creating trek:', $e->getMessage());
            return redirect()->back()->with('error', 'There was an error creating the trek. Please try again.')->withInput();
        }
    }

    public function show($id)
    {
        $trek = Trek::findOrFail($id);
        $trek->image_paths = json_decode($trek->image_paths, true);
        return view('admin.adminTrekDetails', compact('trek'));
    }


    public function showdata($id)
    {
        // Find the trek by its ID
        $trek = Trek::findOrFail($id);

        // Decode fields if they are JSON strings
        if (is_string($trek->route)) {
            $trek->route = json_decode($trek->route, true);
        }
        if (is_string($trek->itinerary)) {
            $trek->itinerary = json_decode($trek->itinerary, true);
        }
        if (is_string($trek->key_attraction)) {
            $trek->key_attraction = json_decode($trek->key_attraction, true);
        }
        if (is_string($trek->preparation_tips)) {
            $trek->preparation_tips = json_decode($trek->preparation_tips, true);
        }
        if (is_string($trek->how_to_reach)) {
            $trek->how_to_reach = json_decode($trek->how_to_reach, true);
        }
        if (is_string($trek->image_paths)) {
            $trek->image_paths = json_decode($trek->image_paths, true);
            // Normalize the paths by replacing backslashes with forward slashes
            $trek->image_paths = array_map(function ($path) {
                return str_replace('\\', '/', $path);
            }, $trek->image_paths);
        }
        return view('trekDetails', compact('trek'));
    }


    public function edit($id)
    {
        $trek = Trek::findOrFail($id);
        return view('admin.edittrek', compact('trek'));
    }
    public function update(Request $request, $id)
    {
        Log::info('Incoming update request dataedit===:', $request->all());

        try {
            // Validate incoming data
            $validated = $request->validate([
                'trek_heading' => 'required|string',
                'price' => 'required|string',
                'about_trek' => 'required|string',
                'location' => 'required|string',
                'altitude' => 'required|string',
                'difficulty' => 'required|string',
                'best_time_to_visit' => 'required|string',
                'base_camp' => 'required|string',
                'duration' => 'required|string',
                'route' => 'array',
                'key_attraction' => 'array',
                'preparation_tips' => 'array',
                'how_to_reach' => 'array',
                'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate image file
                'trek_times_season' => 'nullable|string',
                'trek_times_months' => 'nullable|string',
            ]);

            Log::info('Validated data:', $validated);

            // Find the existing trek to update
            $trek = Trek::findOrFail($id);

            // Handle image uploads (if any new images are uploaded)
            $imagePaths = json_decode($trek->image_paths, true); // Decode existing images (if any)

            if ($request->hasFile('images')) {
                $propertyFolderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $validated['trek_heading']);
                $directoryPath = public_path("images/treks/{$propertyFolderName}");

                // Create directory if it doesn't exist
                if (!File::exists($directoryPath)) {
                    File::makeDirectory($directoryPath, 0755, true);
                }

                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $imageName = time() . '_' . $image->getClientOriginalName();
                        $image->move($directoryPath, $imageName);
                        $imagePaths[] = "images/treks/{$propertyFolderName}/{$imageName}"; // Add new image path
                    } else {
                        Log::error('Invalid image upload: ' . $image->getError());
                    }
                }
            }

            // Update trek data along with image paths
            $trek->update(array_merge($validated, [
                'image_paths' => json_encode($imagePaths), // Update image paths as a JSON array
            ]));

            Log::info('Updated trek data:', array_merge($validated, ['image_paths' => $imagePaths]));
            return redirect()->route('treks.index')->with('success', 'Trek updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation errors:', $e->errors());
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            Log::error('Error while updating trek:', $e->getMessage());
            return redirect()->back()->with('error', 'There was an error updating the trek. Please try again.')->withInput();
        }
    }


    public function destroy($id)
    {
        $trek = Trek::findOrFail($id);
        $imagePaths = json_decode($trek->image_paths, true) ?: [];
        foreach ($imagePaths as $imagePath) {
            File::delete(public_path($imagePath));
        }
        $trek->delete();

        return redirect()->route('treks.index')->with('success', 'Trek deleted successfully.');
    }
}
