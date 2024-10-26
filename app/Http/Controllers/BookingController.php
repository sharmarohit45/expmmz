<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
{
    $bookings = Booking::all();
    return view('admin.bookingTable', compact('bookings'));
}

    public function create()
    {
        // Render the booking form view
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|string|max:15',
            'trekk_name' => 'required|string|max:255',
            'address' => 'required|string|max:1000',
            'message' => 'nullable|string|max:1000',
        ]);

        // Create a new booking
        Booking::create($request->all());

        // Redirect or return a response
        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
    public function destroy($id)
    {
        // Find the booking by ID and delete it
        $booking = Booking::findOrFail($id);
        $booking->delete();

        // Redirect or return a response
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }
}
