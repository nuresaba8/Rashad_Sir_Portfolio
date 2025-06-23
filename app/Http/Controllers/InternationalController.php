<?php

namespace App\Http\Controllers;

use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    public function index()
    {
        $internationals = International::latest()->get();
        return view('Admin.Internationals.index', compact('internationals')); // make sure this file exists
    }

    public function show(International $international)
    {
        return view('Admin.Internationals.show', compact('international'));
    }


    public function create()
    {
        return view('Admin.Internationals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'category' => 'required',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        International::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('internationals.index')->with('success', 'International created successfully.');
    }


    public function edit(International $international)
    {
        return view('Admin.Internationals.edit', compact('international'));
    }

    public function update(Request $request, International $international)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'category' => 'required',
        ]);

        $imagePath = $international->image; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $international->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('internationals.index')->with('success', 'International updated successfully.');
    }


    public function destroy(International $international)
    {
        $international->delete();
        return redirect()->route('internationals.index')->with('success', 'International deleted.');
    }

    public function toggleStatus(International $international)
    {
        $international->status = !$international->status;
        $international->save();

        return redirect()->back()->with('success', 'International status updated.');
    }
}
