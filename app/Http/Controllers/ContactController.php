<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::all();
        return view('admin.adminEnquiryTable', compact('messages'));
    }

   
    public function create()
    {
        return view('contact.create'); // Adjust the view name as necessary
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact message
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the contact message by ID
        $message = Contact::findOrFail($id);
        return view('contact.show', compact('message')); // Adjust the view name as necessary
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the contact message by ID
        $message = Contact::findOrFail($id);
        return view('contact.edit', compact('message')); // Adjust the view name as necessary
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Find the contact message by ID and update it
        $message = Contact::findOrFail($id);
        $message->update($request->all());

        // Redirect back with a success message
        return redirect()->route('contact.index')->with('success', 'Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = Contact::findOrFail($id); // Retrieve the message or fail
        $message->delete(); // Delete the message

        return redirect()->route('admin.adminEnquiryTable')->with('success', 'Message deleted successfully.');
    }
}
