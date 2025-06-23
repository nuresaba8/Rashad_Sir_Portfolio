<?php

namespace App\Http\Controllers;

use App\Models\TVShows;
use Illuminate\Http\Request;

class TVShowsController extends Controller
{
    public function index()
    {
        $tvShows = TVShows::latest()->get();
        return view('Admin.TV_Shows.index', compact('tvShows')); // make sure this file exists
    }

    public function show(TVShows $tvShow)
    {
        return view('Admin.TV_Shows.show', compact('tvShow'));
    }


    public function create()
    {
        return view('Admin.TV_Shows.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'source' => 'nullable|string|max:255',
            'publication_date' => 'nullable|date',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'article_url' => 'nullable|url',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;  // Save relative path for database
        }

        TVShows::create([
            'title' => $request->title,
            'category' => $request->category,
            'source' => $request->source,
            'publication_date' => $request->publication_date,
            'image_url' => $imagePath ?? null,
            'article_url' => $request->article_url ?? null,
        ]);

        return redirect()->route('tvShows.index')->with('success', 'TV Shows created successfully.');
    }


    public function edit(TVShows $tvShow)
    {
        return view('Admin.TV_Shows.edit', compact('tvShow'));
    }

    public function update(Request $request, TVShows $tvShow)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'source' => 'nullable|string|max:255',
            'publication_date' => 'nullable|date',
            'image_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'article_url' => 'nullable|url',
        ]);

        $imagePath = $tvShow->image_url; // Keep current image path if no new image is uploaded

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

        $tvShow->update([
            'title' => $request->title,
            'category' => $request->category,
            'source' => $request->source,
            'publication_date' => $request->publication_date,
            'image_url' => $imagePath ?? null,
            'article_url' => $request->article_url,
        ]);

        return redirect()->route('tvShows.index')->with('success', 'TV Shows updated successfully.');
    }


    public function destroy(TVShows $tvShow)
    {
        $tvShow->delete();
        return redirect()->route('tvShows.index')->with('success', 'TV Shows deleted.');
    }

    public function toggleStatus(TVShows $tvShow)
    {
        $tvShow->status = !$tvShow->status;
        $tvShow->save();

        return redirect()->back()->with('success', 'TV Shows status updated.');
    }
}
