<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $profiles = Home::latest()->get();
        return view('Admin.Home.index', compact('profiles'));
    }

    // Show create form
    public function create()
    {
        return view('Admin.Home.create');
    }

    // Store new profile
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048', // validation for image upload
            'facebook_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
        ]);

        // Default: no image path yet
        $imagePath = null;

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $validated['image_path'] = $imagePath;

        Home::create($validated);

        return redirect()->route('home.index')->with('success', 'Home created successfully.');
    }


    // Show a profile details page
    public function show(Home $home)
    {
        return view('Admin.Home.show', compact('home'));
    }

    // Show edit form
    public function edit(Home $home)
    {
        return view('Admin.Home.edit', compact('home'));
    }

    // Update profile
    public function update(Request $request, Home $home)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'full_description' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
            'facebook_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
        ]);

        // Keep current image path if no new image is uploaded
        $imagePath = $home->image_path;

        if ($request->hasFile('image_path')) {
            // Delete old image if exists
            if ($imagePath && file_exists(public_path($imagePath))) {
                unlink(public_path($imagePath));
            }

            $image = $request->file('image_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $validated['image_path'] = $imagePath;

        $home->update($validated);

        return redirect()->route('home.index')->with('success', 'Home updated successfully.');
    }


    // Delete profile
    public function destroy(Home $home)
    {
        if ($home->image_path && file_exists(public_path($home->image_path))) {
            unlink(public_path($home->image_path));
        }

        $home->delete();

        return redirect()->route('home.index')->with('success', 'Home deleted successfully.');
    }

    public function toggleStatus(Home $home)
    {
        if ($home->status) {
            return redirect()->route('home.index')->with('info', 'This profile is already active.');
        }

        Home::where('id', '!=', $home->id)->update(['status' => 0]);

        $home->status = 1;
        $home->save();

        return redirect()->route('home.index')->with('success', 'Profile activated successfully.');
    }
}
