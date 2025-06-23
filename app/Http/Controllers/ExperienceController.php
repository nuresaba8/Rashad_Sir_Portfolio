<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
        public function index()
    {
        $experiences = Experience::latest()->get();
        return view('Admin.Experiences.index', compact('experiences')); // make sure this file exists
    }

    public function show(Experience $experience)
    {
        return view('Admin.Experiences.show', compact('experience'));
    }


    public function create()
    {
        return view('Admin.Experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'organization' => 'required',
            'image' => 'nullable|image',
            'duration' => 'required',
            'description' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        Experience::create([
            'title' => $request->title,
            'organization' => $request->organization,
            'image' => $imagePath,
            'duration' => $request->duration,
            'description' => $request->description,
        ]);

        return redirect()->route('experiences.index')->with('success', 'Axperience created successfully.');
    }


    public function edit(Experience $experience)
    {
        return view('Admin.Experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'title' => 'required',
            'organization' => 'required',
            'image' => 'nullable|image',
            'duration' => 'required',
            'description' => 'required',
        ]);

        $imagePath = $experience->image; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $experience->update([
            'title' => $request->title,
            'organization' => $request->organization,
            'image' => $imagePath,
            'duration' => $request->duration,
            'description' => $request->description,
        ]);

        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully.');
    }


    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience deleted.');
    }

    public function toggleStatus(Experience $experience)
    {
        $experience->status = !$experience->status;
        $experience->save();

        return redirect()->back()->with('success', 'Experience status updated.');
    }
}
