<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('admin.adminReviewDetailsTable', compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'review' => 'required|string',
        'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'name.required' => 'Please provide your name.',
        'review.required' => 'Please write a review.',
        'image_name.image' => 'The uploaded file must be an image.',
        'image_name.mimes' => 'Allowed image formats are jpeg, png, jpg, gif.',
        'image_name.max' => 'Image size must not exceed 2MB.',
    ]);

    $review = new Review();
    $review->name = $request->name;
    $review->review = $request->review;

    if ($request->hasFile('image_name')) {
        $image = $request->file('image_name');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/review_img'), $imageName);
        $review->image_name = 'img/review_img/' . $imageName; // Save the relative path in the database
    }

    $review->save();

    return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
}

    public function show(string $id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.show', compact('review'));
    }
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);
        return view('admin.editReview', compact('review'));
    }

    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'review' => 'required|string',
        'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $review = Review::findOrFail($id);
    $review->name = $request->name;
    $review->review = $request->review;

    if ($request->hasFile('image_name')) {
        // Delete old image if it exists
        if ($review->image_name && file_exists(public_path($review->image_name))) {
            unlink(public_path($review->image_name)); // Delete the old image
        } else {
            Log::warning('File not found for deletion: ' . $review->image_name);
        }

        // Save new image
        $image = $request->file('image_name');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/review_img'), $imageName);
        $review->image_name = 'img/review_img/' . $imageName; // Save the relative path in the database
    }

    $review->save();

    return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $review = Review::findOrFail($id);

    // Delete image from storage if it exists
    if ($review->image_name && file_exists(public_path($review->image_name))) {
        unlink(public_path($review->image_name)); // Delete the image
    } else {
        Log::warning('File not found for deletion: ' . $review->image_name);
    }

    $review->delete();

    return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
}

}
