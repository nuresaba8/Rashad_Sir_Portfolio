<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = Award::latest()->get();
        return view('Admin.Awards.index', compact('awards')); // make sure this file exists
    }

    public function show(Award $award)
    {
        return view('Admin.Awards.show', compact('award'));
    }


    public function create()
    {
        return view('Admin.Awards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        Award::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
        ]);

        return redirect()->route('awards.index')->with('success', 'Award created successfully.');
    }


    public function edit(Award $award)
    {
        return view('Admin.Awards.edit', compact('award'));
    }

    public function update(Request $request, Award $award)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        $imagePath = $award->image; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $award->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return redirect()->route('awards.index')->with('success', 'Award updated successfully.');
    }


    public function destroy(Award $award)
    {
        $award->delete();
        return redirect()->route('awards.index')->with('success', 'Award deleted.');
    }

    public function toggleStatus(Award $award)
    {
        $award->status = !$award->status;
        $award->save();

        return redirect()->back()->with('success', 'Award status updated.');
    }
}
